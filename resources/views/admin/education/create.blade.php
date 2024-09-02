@extends('admin.layout')
@section('title', 'Add Education')
@section('content')
    <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form method="POST" action="{{ route('education.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" required>
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
              </div>
            </form>
          </div>
          <div class="card-footer"></div>
        </div>
        @endsection
