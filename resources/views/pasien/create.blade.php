<x-app-layout>
    @slot('title', 'Tambah Data')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Add New Patient</h3>
        <a href="{{ route('pasien.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('pasien.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon') }}" required>
                </div>
                <div class="mb-3">
                    <label for="rumah_sakit_id" class="form-label">Rumah Sakit</label>
                    <select class="form-select" id="rumah_sakit_id" name="rumah_sakit_id" required>
                        <option value="">-- Pilih Rumah Sakit --</option>
                        @foreach($rumahSakits as $rs)
                            <option value="{{ $rs->id }}" {{ old('rumah_sakit_id') == $rs->id ? 'selected' : '' }}>
                                {{ $rs->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
