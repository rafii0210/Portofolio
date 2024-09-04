@extends('portof.index')
@section('content')
<section class="callout">
    <div class="container px-4 px-lg-5">
        <div class="col-lg-10">
            @foreach ($skills as $skill)
            <div class="mb-4">
                <h2>{{ $skill->nama_skill }}</h2>
                <h3>{{ $skill->sub_skills }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
