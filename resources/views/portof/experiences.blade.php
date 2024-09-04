@extends('portof.index')
@section('content')
<section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-start">
        @foreach ($experiences as $experience)
        <div class="mb-4">
            <h2 class="text-primary">{{ $experience->perusahaan }}</h2>
            <h3 class="text-secondary">
                {{ $experience->posisi }}
            </h3>
            <p>{{ $experience->tugas }}</p>
            <p><strong>Masuk:</strong> {{ $experience->tanggal_masuk }}</p>
            <p><strong>Keluar:</strong> {{ $experience->tanggal_keluar }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection
