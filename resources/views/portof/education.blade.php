@extends('portof.index')
@section('content')
<section class="content-section bg-primary text-white" id="services">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
            @foreach ($educations as $education)
            <div class="mb-4">
                <h2>{{ $education->pendidikan }}</h2>
                <h3 class="lead mb-5">
                    {{ $education->jurusan }}
                </h3>
                <h2>{{ $education->tanggal_masuk }}</h2>
                <h2>{{ $education->tanggal_keluar }}</h2>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
