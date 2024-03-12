<!DOCTYPE html>
<html>
    <head>
        <title> Data Kategori</title>
    </head>
    <body>
        <h1> Data Kategori</h1>
        <table border="1" cellpadding="2" cellspasing="0">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->level_id}}</td>
                <td>{{$d->level_kode}}</td>
                <td>{{$d->level_nama}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>