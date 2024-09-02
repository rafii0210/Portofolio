@extends('admin.layout')
@section('title', 'Profile')
@section('content')
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
      <a href="{{ route('profile.create') }}" class="btn btn-primary mb-2">ADD</a>
      {{-- <a href="{{ route('profile.recycle') }}" class="btn btn-warning mb-2">Recycle</a> --}}
      <div class="table table-responsive">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Action</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Telpon</th>
            </tr>
          </thead>
          <tbody>
             @foreach ($profiles as $index => $item)
            <tr id="item-{{ $item->id }}">
              <td>{{ $index + 1 }}</td>
              <td>
                <a href="{{ route('profile.edit', $item->id) }}" class="btn btn-success btn-x5">Edit</a>
                <form class="d-inline" action="{{ route('profile.destroy', $item->id) }}"
                    method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        Delete
                    </button>
                </form>

              </td>
              <td>{{ $item->nama_lengkap }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->no_telpon }}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer"></div>
  </div>
@endsection

{{-- @section('script-sweetalert')
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const deleteButtons = document.querySelectorAll('.delete-button');
    const statusRadios = document.querySelectorAll('.status-radio');
    // Trigger button softdelete
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
            fetch(`/admin/profiles/softdelete/${itemId}`, {
              method: 'DELETE',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
                  document.getElementById(`item-${itemId}`).remove();
                });
              } else {
                Swal.fire(
                  'Gagal!',
                  data.error || 'Terjadi kesalahan saat menghapus data.',
                  'error'
                );
              }
            })
            .catch(error => {
              Swal.fire(
                'Gagal!',
                'Terjadi kesalahan saat menghapus data.',
                'error'
              );
            });
          }
        });
      });
    });
    // Trigger button status
    statusRadios.forEach(radio => {
      radio.addEventListener('click', (event) => {
        const itemId = event.target.getAttribute('data-id');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/admin/profile/update-status/${itemId}`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            Swal.fire(
              'Berhasil!',
              'Status berhasil diperbarui.',
              'success'
            );
            // Set all other radios to unchecked
            statusRadios.forEach(r => {
              if (r.getAttribute('data-id') != itemId) {
                r.checked = false;
              }
            });
          } else {
            Swal.fire(
              'Gagal!',
              data.error || 'Terjadi kesalahan saat memperbarui status.',
              'error'
            );
          }
        })
        .catch(error => {
          Swal.fire(
            'Gagal!',
            'Terjadi kesalahan saat memperbarui status.',
            'error'
          );
        });
      });
    });
  });

</script>
@endsection --}}

