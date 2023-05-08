<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($mahasiswas as $mhs)
    <h1>{{$mhs->nama}}</h1>
    <h2>{{$mhs->nim}}</h2>
    <h2>{{$mhs->tanggal_lahir}}</h2>
    <h2>{{$mhs->ipk}}</h2>
    @endforeach
</body>
</html>
