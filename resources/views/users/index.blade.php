<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CRUD AJAX Users</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-5">
    <h2>CRUD Users (AJAX + DataTables)</h2>
    <button class="btn btn-primary mb-3" id="addUser">Tambah User</button>

    <table id="usersTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog">
            <form id="userForm">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah / Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="userId">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- jQuery + DataTables --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(function() {
        let table = $('#usersTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('users.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Tambah user
        $('#addUser').click(function() {
            $('#userId').val('');
            $('#userForm')[0].reset();
            $('#userModal').modal('show');
        });

        // Simpan / update user
        $('#userForm').submit(function(e) {
            e.preventDefault();

            let formData = $(this).serialize() + '&_token={{ csrf_token() }}';

            $.post('{{ route('users.store') }}', formData, function() {
                $('#userModal').modal('hide');
                table.ajax.reload();
            });
        });


        // Edit user
        $(document).on('click', '.edit', function() {
            let id = $(this).data('id');
            $.get('users/edit/' + id, function(data) {
                $('#userId').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#userModal').modal('show');
            });
        });

        // Hapus user
        $(document).on('click', '.delete', function() {
            if (confirm("Yakin hapus user ini?")) {
                let id = $(this).data('id');
                $.ajax({
                    url: 'users/destroy/' + id,
                    type: 'DELETE',
                    data: {_token: '{{ csrf_token() }}'},
                    success: function() {
                        table.ajax.reload();
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
