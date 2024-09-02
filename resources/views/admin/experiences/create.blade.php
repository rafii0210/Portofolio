@extends('admin.layout')
@section('title', 'Add Experience')
@section('content')
    <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form method="POST" action="{{ route('experiences.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="perusahaan">Perusahaan</label>
                <input type="text" name="perusahaan" id="perusahaan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="posisi">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tugas">Tugas</label>
                <textarea name="tugas" id="tugas" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
              </div>
              <div class="mb-3">
                <label for="tanggal_keluar">Tanggal Keluar</label>
                <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">ADD</button>
        </form>
    </div>
    <div class="card-footer">

    </div>
</div>
@endsection
