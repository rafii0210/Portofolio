@extends('admin.layout')
@section('title', 'Skill')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('skill.update', $skill->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_skill">Nama Skill</label>
                    <input type="text" class="form-control" name="nama_skill" id="nama_skill" value="{{ isset($skill->nama_skill) ? $skill->nama_skill: 'Tidak ada nama skill' }}">
                  </div>
                  <div class="mb-3">
                    <label for="sub_skills">Sub Skills</label>
                    <textarea name="sub_skills" id="sub_skills" cols="30" rows="10" class="form-control">{{ isset($skill->sub_skills) ? $skill->sub_skills : 'Tidak ada sub skills' }}</textarea>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Add</button>

            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
