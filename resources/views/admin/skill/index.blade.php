@extends('admin.layout')
@section('title', 'Skill')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <a href="{{ route('skill.create') }}" class="btn btn-primary mb-2">ADD</a>
            {{-- <a href="{{ route('profile.recycle') }}" class="btn btn-warning mb-2">Recycle</a> --}}
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Skill</th>
                            <th>Sub Skills</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill as $index => $item)
                            <tr id="item-{{ $item->id }}">
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('skill.edit', $item->id) }}" class="btn btn-success btn-x5">Edit</a>
                                    <form class="d-inline" action="{{ route('skill.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                                <td>{{ $item->nama_skill }}</td>
                                <td>{{ $item->sub_skills }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
@endsection
