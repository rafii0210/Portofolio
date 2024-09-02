@extends('admin.layout')
@section('title', 'Edit Education')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('education.update', $education->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="pendidikan">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="{{ isset($education->pendidikan) ? $education->pendidikan : "Tidak ada pendidikan" }}">
                  </div>
                  <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ isset($education->jurusan) ? $education->jurusan : "Tidak ada jurusan" }}">
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ isset($education->tanggal_masuk) ? $education->tanggal_masuk : null }}">
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_keluar">Tanggal Keluar</label>
                    <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" value="{{ isset($education->tanggal_keluar) ? $education->tanggal_keluar : null }}">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Edit</button>
                  </div>
                </form>
              </div>
              <div class="card-footer"></div>
            </div>
            @endsection
