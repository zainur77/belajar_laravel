<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAMA KATEGORI</th>
            <th>KODE KATEGORI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($kategori as $data)
    <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->nama_kategori}}</td>
    <td>{{$data->kode_kategori}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>