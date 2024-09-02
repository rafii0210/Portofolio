<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experiences::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'perusahaan' => 'required|string|max:50',
            'posisi' => 'required|string|max:60',
            'tugas' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'tanggal_keluar' => 'required|date|after:tanggal_masuk' // Menambahkan validasi agar tanggal_keluar setelah tanggal_masuk
        ]);

        //Insert:
        Experiences::create([
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'tugas' => $request->tugas,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar
        ]);

        return redirect()->route('experiences.index')->with('success', 'Experience berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiences $experiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experiences::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience = Experiences::find($id);
        $request->validate([
            'perusahaan' => 'required|string|max:50',
            'posisi' => 'required|string|max:60',
            'tugas' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'tanggal_keluar' => 'required|date|after:tanggal_masuk' // Menambahkan validasi agar tanggal_keluar setelah tanggal_masuk
        ]);

        $experience->perusahaan = $request->perusahaan;
        $experience->posisi = $request->posisi;
        $experience->tugas = $request->tugas;
        $experience->tanggal_masuk = $request->tanggal_masuk;
        $experience->tanggal_keluar = $request->tanggal_keluar;

        $experience->save();

        return redirect()->route('experiences.index')->with('success', 'Edit Experience berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experiences::withTrashed()->findOrFail($id);
        $experience->forceDelete();
        return redirect()->route('experiences.index')->with('success', 'Data berhasil dihapus');
    }
}
