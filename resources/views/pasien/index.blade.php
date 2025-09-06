<x-app-layout>
    @slot('title', 'Data Pasien')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Daftar Pasien</h3>
        <x-primary-button href="{{ route('pasien.create') }}">
            Add New Patient
        </x-primary-button>
    </div>

    <!-- Filter Section -->
    <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <label for="hospital-filter" class="form-label">Filter by Rumah Sakit</label>
            <select class="form-select" id="hospital-filter">
                <option value="">All Hospitals</option>
                @foreach($rumahSakits as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    </div>
    </div>

    <!-- Patients Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive" id="patientsTable">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama Pasien</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Rumah Sakit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="patients-tbody">
                    @forelse($pasiens as $pasien)
                        <tr data-id="{{ $pasien->id }}">
                            <td>{{ $pasien->id }}</td>
                            <td>{{ $pasien->nama }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>{{ $pasien->telepon }}</td>
                            <td>{{ $pasien->rumahSakit->nama }}</td>
                            <td>
                                <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                <button class="btn btn-sm btn-outline-danger delete-btn" data-id="{{ $pasien->id }}">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Tidak ada data pasien</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@push('scripts')
<script>
$(function() {
    // Filter Rumah Sakit & Delete Pasien
    $('#hospital-filter').on('change', function() {
        let hospitalId = $(this).val();

        $.get("{{ route('pasien.index') }}", { rumah_sakit_id: hospitalId }, function(res) {
            $('#patients-tbody').html(res);
        });
    });

    // Event untuk tombol delete
    $('#patients-tbody').on('click', '.delete-btn', function() {
        if(!confirm('Yakin hapus data pasien ini?')) return;

        let pasienId = $(this).data('id');
        $.ajax({
            url: '/data-pasien/delete/' + pasienId,
            type: 'DELETE',
            data: { _token: '{{ csrf_token() }}' },
            success: function(res) {
                if(res.success){
                    $('tr[data-id="'+pasienId+'"]').remove();
                } else {
                    alert('Gagal menghapus data pasien');
                }
            },
            error: function() {
                alert('Terjadi kesalahan');
            }
        });
    });
});
</script>
@endpush


</x-app-layout>
