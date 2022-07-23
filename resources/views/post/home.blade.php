<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <center><h4><b><i>1. TABEL KARYAWAN</i></b></h4></center>
        <center><h4><b><i>= = = = = = = = = =</i></b></h4></center>
        <table class="table table-success table-striped table-bordered border-light" style="text-align:center">
            <tr>
                <td><b>No</b></td>
                <td><b>Id Karyawan</b></td>
                <td><b>Nama Karyawan</b></td>
                <td><b>JK</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($karyawan as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['id_karyawan']}}</i></td>
                    <td><i>{{$data['nm_karyawan']}}</i></td>
                    <td><i>{{$data['JK']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <center>
            <h4><b><i>2. TABEL PENGUNJUNG</i></b></h4>
            <h4><b><i>= = = = = = = = = =</i></b></h4>
        </center>
        <table class="table table-dark table-striped table-bordered border-secondary" style="text-align:center">
            <tr>
                <td><b>No</b></td>
                <td><b>Id Pengunjung</b></td>
                <td><b>Nama Pengunjung</b></td>
                <td><b>Alamat</b></td>
                <td><b>JK</b></td>
                <td><b>No Tlp</b></td>
                <td><b>No Ktp</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($pengunjung as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['id_pengunjung']}}</i></td>
                    <td><i>{{$data['nm_pengunjung']}}</i></td>
                    <td><i>{{$data['alamat']}}</i></td>
                    <td><i>{{$data['JK']}}</i></td>
                    <td><i>{{$data['no_hp']}}</i></td>
                    <td><i>{{$data['no_ktp']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <center>
            <h4><b><i>3. TABEL TRANSAKSI</i></b></h4>
            <h4><b><i>= = = = = = = = = =</i></b></h4>
        </center>
        <table class="table table-success table-striped table-bordered border-light" style="text-align:center">
            <tr>
                <td><b>No</b></td>
                <td><b>No Transaksi</b></td>
                <td><b>Id Pengunjung</b></td>
                <td><b>Id Karyawan</b></td>
                <td><b>Jumlah Kamar</b></td>
                <td><b>Tanggal Masuk</b></td>
                <td><b>Tanggal Keluar</b></td>
                <td><b>Lama Nginap</b></td>
                <td><b>Total Harga</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($transaksi as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['no_transaksi']}}</i></td>
                    <td><i>{{$data['id_pengunjung']}}</i></td>
                    <td><i>{{$data['id_karyawan']}}</i></td>
                    <td><i>{{$data['jmlh_kamar']}}</i></td>
                    <td><i>{{$data['tgl_masuk']}}</i></td>
                    <td><i>{{$data['tgl_keluar']}}</i></td>
                    <td><i>{{$data['lama_nginap']}} Hari</i></td>
                    <td><i>Rp {{$data['total_harga']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <center>
            <h4><b><i>4. TABEL DETAIL TRANSAKSI</i></b></h4>
            <h4><b><i>= = = = = = = = = =</i></b></h4>
        </center>
        <table class="table table-dark table-striped table-bordered border-secondary" style="text-align:center">
            <tr>
                <td><b>No</b></td>
                <td><b>Id Detail Transaksi</b></td>
                <td><b>No Transaksi</b></td>
                <td><b>No Kamar</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($detailtransaksi as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['id_dtl_transaksi']}}</i></td>
                    <td><i>{{$data['no_transaksi']}}</i></td>
                    <td><i>{{$data['no_kamar']}}</i></td>
                </tr>
            @endforeach
        </table>
        <hr>
        <center>
            <h4><b><i>5. TABEL KAMAR</i></b></h4>
            <h4><b><i>= = = = = = = = = =</i></b></h4>
        </center>
        <table class="table table-success table-striped table-bordered border-light" style="text-align:center">
            <tr>
                <td><b>No</b></td>
                <td><b>No Kamar</b></td>
                <td><b>Jenis Kamar</b></td>
                <td><b>Harga</b></td>
            </tr>
            <?php $no=1 ?>
            @foreach ($kamar as $data)
                <tr>
                    <td><i>{{$no++}}.</i></td>
                    <td><i>{{$data['no_kamar']}}</i></td>
                    <td><i>{{$data['jenis_kamar']}}</i></td>
                    <td><i>Rp {{$data['harga']}}</i></td>
                </tr>
            @endforeach
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>