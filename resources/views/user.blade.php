<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level pengguna</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row d-flex justify-content-center">
        <div class="m-2 p-5 card shadow">
            <h1 class="text-center">Data User</h1>
            <a href="/user/tambah" class="btn btn-success my-2">+ Tambah User</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">ID-Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d -> user_id}}</td>
                        <td>{{$d -> username}}</td>
                        <td>{{$d -> nama}}</td>
                        <td>{{$d -> level_id}}</td>
                        <td>
                            <a href="/user/ubah/{{$d->user_id}}" class="btn btn-primary">Ubah</a>
                            <a href="/user/hapus/{{$d->user_id}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>