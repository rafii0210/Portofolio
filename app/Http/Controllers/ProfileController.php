<?php

namespace App\Http\Controllers;

use id;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles = Profile::all();
        return view('admin.profile.create',compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_telpon' => 'required|string|max:15',
            'alamat' => 'nullable|string|max:255'
        ]);

        // Menghenddle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan nama file saja
        }

        //Insert into profiles () Values ()
        try {
            Profile::create([
                'gambar' => $name,
                'description' => $request->description,
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'no_telpon' => $request->no_telpon,
                'alamat' => $request->alamat,
            ]);
        } catch (QueryException $th) {
            return back()->withErrors(['email' => 'Email sudah terdaftar'])->withInput();
        }

        return redirect()->route('profile.index')->with('success', 'Profile berhasil di tambah');
    }



    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::findOrFail($id);
        $edit = "Edit";
        return view('admin.profile.edit', compact(['profile', 'edit']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::find($id);
        $request->validate([
            'picture'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_lengkap'=>'required|string',
            'no_telpon'=>'required|numeric',
            'email'=>'required|email',
            'description'=>'nullable|string',
            'alamat'=>'nullable|string',
        ]);
    // Simpan gambar jika ada yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($profile->gambar) {
                Storage::delete('public/image/'.$profile->gambar);
            }
            //Simpan gambar baru
            $gambar = $request->file('gambar');
            $path = $gambar->store('public/image');
            $name = basename($path); // menyimpan nama file saja
            $profile->gambar = $name;
        }

        // Update data lainnya
        $profile->nama_lengkap = $request->nama_lengkap;
        $profile->no_telpon = $request->no_telpon;
        $profile->email = $request->email;
        $profile->description = $request->description;
        $profile->alamat = $request->alamat;

        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Edit Profile berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::withTrashed()->findOrFail($id);

        if ($profile->picture) {
            Storage::delete('public/image/'.$profile->picture);
        }
        $profile->forceDelete();

        return redirect()->route('profile.index')->with('success', 'Data berhasil dihapus');
    }
}
