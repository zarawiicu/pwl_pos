<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level pengguna</title>
</head>
<body>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Level Kode</th>
            <th>Nama Level</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->level_id}}</td>
            <td>{{$d->level_kode}}</td>
            <td>{{$d->level_nama}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>