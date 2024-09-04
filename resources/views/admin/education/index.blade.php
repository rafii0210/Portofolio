@extends('admin.layout')
@section('title', 'Education')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" href="{{ route('educations.create') }}">ADD</a>
            {{-- <a class="btn btn-warning mb-2" href="{{ route('experiences.recycle') }}">Recycle</a> --}}
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Pendidikan</th>
                            <th>jurusan</th>
                            <th>Durasi Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($education as $index => $item)
            <tr id="item-{{ $item->id }}">
              <td>{{ $index + 1 }}</td>
              <td>
                <a href="{{ route('educations.edit', $item->id) }}" class="btn btn-success btn-sm m-2">Edit</a>
                <form action="{{ route('educations.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm m-2">Delete</button>
                </form>
              </td>
              <td>{{ $item->pendidikan }}</td>
              <td>{{ $item->jurusan }}</td>
              <td>{{ $item->tanggal_masuk ." - ". $item->tanggal_keluar}}</td>
            </tr>
            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
{{-- @section('script-sweetalert')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const deleteButtons = document.querySelectorAll('.delete-button');

            //Trigger button softdelete
            deleteButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    event.preventDefault();
                    const itemId = event.target.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: 'Menghapus data ini tidak dapat dibatalkan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`/admin/experiences/softdelete/${itemId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Dihapus!',
                                            'Data telah dihapus secara sementara.',
                                            'success'
                                        ).then(() => {
                                            document.getElementById(
                                                `item-${itemId}`).remove();
                                        });
                                    } else {
                                        Swal.fire(
                                            'Gagal!',
                                            data.error ||
                                            'Terjadi kesalahan saat menghapus data.',
                                            'error'
                                        );
                                    }
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Gagal',
                                        'Terjadi kesalahan saat menghapus data.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        });
    </script>
@endsection --}}
