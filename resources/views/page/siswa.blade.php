<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <b><i><u>Data Siswa</u></i></b>
        </legend>
        @foreach ($siswa as $murid)
            <b>Id : </b><i>{{$murid['id']}}</i> <br>
            <b>Nama : </b><i>{{$murid['name']}}</i> <br>
            <b>Umur : </b><i>{{$murid['age']}}</i> <br>
            <b>Status : </b>
            @if($murid['age'] >= 17)
            <i>Anda berhak mendapatkan KTP</i>
            @else
            <i>Anda belum berhak mendapatkan KTP</i>
            @endif
            <br>
            @foreach ($murid['mapel'] as $mapel)
            <li><b>Mapel : </b><i>{{$mapel}}</i></li>

                
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>