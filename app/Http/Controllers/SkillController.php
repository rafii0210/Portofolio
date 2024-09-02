<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skill = skill::all();
        return view('admin.skill.create', compact('skill'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_skill' => 'required|string|max:255',
        //     'sub_skills' => 'required|array',
        // ]);

        //Kalo ada input lainnya, tambahkan ke sub_skills
        // $subSkills = $request->sub_skills;
        // if ($request->filled('text-other')) {
        //     $subSkills[] = $request->input('text-other');
        // }

        // $workflow = $request->input('workflow', []);
        //Insert into skills () values ()
        Skill::create([
            'nama_skill' => $request->nama_skill,
            'sub_skills' => $request->sub_skills,
        ]);

        return redirect()->route('skill.index')->with('success', 'Skill berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi
        $request->validate([
            // 'id_profile' => 'required',
            'nama_skill' => 'required|string|max:255',
            // 'sub_skills' => 'nullable|array',
            'sub_skills' => 'nullable|string',
        ]);

        //Select * from skills where id = $id
        $skill = Skill::findOrFail($id);

        //Update data
        $skill->nama_skill = $request->nama_skill;
        $skill->sub_skills = $request->sub_skills;

        $skill->save();

        return redirect()->route('skill.index')->with('successEdt', 'Skill berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Delete Permanen berhasil');
    }
}
