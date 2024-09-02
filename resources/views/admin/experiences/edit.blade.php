@extends('admin.layout')
@section('title', 'Experience')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('experiences.update', $experience->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="perusahaan">Perusahaan</label>
                    <input type="text" class="form-control" name="perusahaan" id="perusahaan" value="{{ isset($experience->perusahaan) ? $experience->perusahaan : 'Tidak ada perusahaan' }}">
                  </div>
                  <div class="mb-3">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" name="posisi" id="pposisi" value="{{ isset($experience->posisi) ? $experience->posisi : 'Tidak ada posisi' }}">
                  </div>
                  <div class="mb-3">
                    <label for="tugas">tugas</label>
                    <textarea name="tugas" id="tugas" cols="30" rows="10" class="form-control">{{ isset($experience->tugas) ? $experience->tugas : 'Tidak ada tugas' }}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ isset($experience->tanggal_masuk) ? $experience->tanggal_masuk : 'Tidak ada Tanggal' }}">
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_keluar">Tanggal Keluar</label>
                    <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" value="{{ isset($experience->tanggal_keluar) ? $experience->tanggal_keluar : 'Tidak ada Tanggal' }}">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Edit</button>

            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
