@extends('admin.layout')
@section('title', 'Edit Profile')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="POST" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    @if($profile->gambar)
                    <img src="{{ asset('storage/image/' . $profile->gambar) }}" alt="Current Picture" class="m-2" width="160">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description">Descriptions</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $profile->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap">Nama</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $profile->nama_lengkap }}">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $profile->email }}">
                </div>
                <div class="mb-3">
                    <label for="no_telpon">No Telpon</label>
                    <input type="number" name="no_telpon" id="no_telpon" class="form-control" value="{{ $profile->no_telpon}}">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ $profile->alamat }}</textarea>
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
