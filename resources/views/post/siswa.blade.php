<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <h3><b><i>1. TABEL SISWA</i></b></h3>
        <h3><b><i>= = = = = = = = = =</i></b></h3>
        <table class="table table-success table-striped table-bordered border-primary">
            <tr>
                <td><b>Id</b></td>
                <td><b>NoSISWA</b></td>
                <td><b>Nama</b></td>
                <td><b>JK</b></td>
                <td><b>Jurusan</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($siswa as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['NoSISWA']}}</i></td>
                    <td><i>{{$data['Nama']}}</i></td>
                    <td><i>{{$data['JK']}}</i></td>
                    <td><i>{{$data['Jurusan']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <h3><b><i>2. TABEL PESERTA</i></b></h3>
        <h3><b><i>= = = = = = = = = =</i></b></h3>
        <table class="table table-success table-striped table-bordered border-primary">
            <tr>
                <td><b>Id</b></td>
                <td><b>NoSISWA</b></td>
                <td><b>Kode_MP</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($peserta as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['NoSISWA']}}</i></td>
                    <td><i>{{$data['Kode_MP']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <h3><b><i>3. TABEL MAPEL</i></b></h3>
        <h3><b><i>= = = = = = = = = =</i></b></h3>
        <table class="table table-success table-striped table-bordered border-primary">
            <tr>
                <td><b>Id</b></td>
                <td><b>Kode_MP</b></td>
                <td><b>Nama_MP</b></td>
                <td><b>SKS</b></td>
                <td><b>Semester</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($mapel as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['Kode_MP']}}</i></td>
                    <td><i>{{$data['Nama_MP']}}</i></td>
                    <td><i>{{$data['SKS']}}</i></td>
                    <td><i>{{$data['Semester']}}</i></td>
                </tr>
            @endforeach
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>