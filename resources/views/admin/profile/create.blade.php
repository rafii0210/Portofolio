@extends('admin.layout')
@section('title', ' Create Profile')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Descriptions</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap">Nama</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no_telpon">No Telpon</label>
                    <input type="number" name="no_telpon" id="no_telpon" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
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
