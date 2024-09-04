@extends('portof.index')
@section('content')
<header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <img src="{{ asset('storage/image/' . $profile->gambar) }}" alt="Profile.Gambar" style="border-radius: 50%; width: 200px; height: 200px;">
        <h1 class="mb-1">{{ $profile->nama_lengkap }}</h1>
        <h3 class="mb-5"><em>{{ $profile->description }}</em></h3>
        <h2 class="mb-4">{{ $profile->alamat }}</h2>
        <h2 class="mb-4">{{ $profile->no_telpon }}</h2>
        <h2 class="mb-4">{{ $profile->email }}</h2>
    </div>
</header>
@endsection
