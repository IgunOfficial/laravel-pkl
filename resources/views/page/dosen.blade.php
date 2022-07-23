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
            <b><i><u>DATA MAHASISWA</u></i></b>
        </legend>
        @foreach ($dosen as $data)
        <ul>
            <b>Id : </b><i>{{$data['id']}}</i> <br>
            <b>Nama Dosen : </b><i>{{$data['namadosen']}}</i> <br>
            <b>Mata Kuliah : </b><i>{{$data['matkul']}}</i> <br>
            = = = = = = = = = = = = = = = = = = = =
            <?php $nilai_b = 0 ?>
            @foreach ($data['mahasiswa'] as $mahasiswa)
                <li><b>Nama Mahasiswa : </b><i>{{$mahasiswa['nama']}}</i></li>
                <b>Nilai : </b> <i>{{$mahasiswa['nilai']}}</i> <br>
                <b>Grade : </b><i>@if ($mahasiswa['nilai'] >= 90)
                    A
                    @elseif($mahasiswa['nilai'] >= 80)
                    B
                    @elseif($mahasiswa['nilai'] >= 70)
                    C
                    @elseif($mahasiswa['nilai'] >= 50)
                    D
                    @elseif($mahasiswa['nilai'] <= 50)
                    E
                    @else
                    Grade Tidak Ada
                    @endif</i>
                <?php $nilai_b += $mahasiswa['nilai'] ?>
            @endforeach
            <br>
            - - - - - - - - - - - - - - - <br>
            <b>TOTAL NILAI KESELURUHAN MAHASISWA = </b><i>{{$nilai_b}}</i><br>
            <?php $nilairata = $nilai_b / count($data['mahasiswa'])?>
            <b>NILAI RATA-RATA = <i>{{$nilairata}}</i></b> <br>
            <b>Grade Dari Dosen : </b><i>{{$data['namadosen']}} @if($nilairata >= 90)
                <b>A</b>
                @elseif($nilairata >= 80)
                <b>B</b>
                @elseif($nilairata >= 70)
                <b>C</b>
                @elseif($nilairata >= 50)
                <b>D</b>
                @elseif($nilairata <= 50)
                <b>E</b>
                @else
                Grade Tidak Ada
            @endif</i>
            <hr>
        </ul>
        @endforeach
    </fieldset>
</body>
</html>