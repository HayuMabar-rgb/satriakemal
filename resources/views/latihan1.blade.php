<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar siswa abadi</center>
    @foreach($data as $index => $value)
    nama  {{$index['nama']}}<br>
    Kelas {{$index['kelas']}}<br>
    @endforeach


</body>
</html>