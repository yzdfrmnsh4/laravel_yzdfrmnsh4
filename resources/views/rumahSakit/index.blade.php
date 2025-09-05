<x-app-layout>
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Daftar Rumah Sakit</h3>
    <x-primary-button href="{{ route('rumahSakit.create') }}">
        Add New Hospital
    </x-primary-button>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rumahsakits as $rumahsakit)
                        
                    <tr data-id="{{ $rumahsakit->id }}">
                        <td>{{ $rumahsakit->id }}</td>
                        <td>{{ $rumahsakit->nama }}</td>
                        <td>{{ $rumahsakit->alamat }}</td>
                        <td>{{ $rumahsakit->email }}</td>
                        <td>{{ $rumahsakit->telepon }}</td>
                        <td>
                            <a href="{{ route('rumahSakit.edit', $rumahsakit->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                            <button class="btn btn-sm btn-outline-danger delete-btn" data-id="{{ $rumahsakit->id }}">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('.delete-btn').click(function() {
        if(confirm('Yakin hapus rumah sakit ini?')) {
            let id = $(this).data('id');      // ambil ID dari tombol
            let row = $(this).closest('tr');  // ambil row yang akan dihapus

            $.ajax({
                url: '/data-rumah-sakit/delete/' + id,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function() {
                    row.remove(); // hapus row dari tabel
                },
                error: function() {
                    alert('Gagal menghapus rumah sakit');
                }
            });
        }
    });
});
</script>

</x-app-layout>