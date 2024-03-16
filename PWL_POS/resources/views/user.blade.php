<!DOCTYPE html>
<html>
    <head>
        <title> Data User</title>
    </head>
    <body>
        <h1> Data User</h1>
        <a href="/user/tambah">+ Tambah User</a>
        <table border="1" cellpadding="2" cellspasing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->id_user}}</td>
                <td>{{$d->username}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->level->lvl_id}}</td>
                <td>{{$d->level->lvl_kode}}</td>
                <td>{{$d->level->lvl_nama}}</td>
                <td><a href="/user/ubah/{{$d->id_user}}">Ubah</a> | <a href="/user/hapus/{{$d->id_user}}">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>