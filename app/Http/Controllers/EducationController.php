<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = education::all();
        return view('admin.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pendidikan' => 'required|string|max:60',
            'jurusan' => 'required|string|max:60',
            'tanggal_masuk' => 'required|date',
            'tanggal_keluar' => 'required|date|after:tanggal_masuk' // Menambahkan validasi agar tanggal_keluar setelah tanggal_masuk
        ]);

        //Insert
        Education::create([
            'pendidikan'=>$request->pendidikan,
            'jurusan'=>$request->jurusan,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'tanggal_keluar'=>$request->tanggal_keluar
        ]);
        return redirect()->route('educations.index')->with('success', 'Education berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $education = education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $education = Education::find($id);
       $request->validate([
        'pendidikan' => 'required|string|max:60',
        'jurusan' => 'required|string|max:60',
        'tanggal_masuk' => 'required|date',
        'tanggal_keluar' => 'required|date|after:tanggal_masuk' // Menambahkan validasi agar tanggal_keluar setelah tanggal_masuk
       ]);
       $education->pendidikan = $request->pendidikan;
       $education->jurusan = $request->jurusan;
       $education->tanggal_masuk = $request->tanggal_masuk;
       $education->tanggal_keluar = $request->tanggal_keluar;

       $education->save();

       return redirect()->route('educations.index')->with('success', 'Edit Education berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::withTrashed()->findOrFail($id);
        $education->forceDelete();
        return redirect()->route('educations.index')->with('success', 'Data berhasil dihapus');
    }
}
