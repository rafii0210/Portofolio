@extends('admin.layout')
@section('title', ' Add Skill')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('skill.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_skill">Nama Skill</label>
                    <input type="text" name="nama_skill" id="nama_sill" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="sub_skills">Sub Skills</label>
                    <textarea name="sub_skills" id="sub_skills" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>

            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
