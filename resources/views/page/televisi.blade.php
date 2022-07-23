<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Televisi</title>
</head>
<body>
    <div class="container">
        <div class="col-md-5">
            <fieldset>
                <legend>Latihan</legend>
                <h2><b><i><u>Jadwal Siaran Acara Televisi</u></i></b></h2>
                @foreach ($televisi as $tv)
                    = = = = = = = = = = = = = = = = = = = = = = = <br>
                    <table>
                        <tr>
                            <td><b>NAMA CHANNEL</b></td>
                            <td><b>:</b></td>
                            <td><i>{{$tv['nama_channel']}}</i></td>
                        </tr>
                    </table>
                    @foreach ($tv['jadwal'] as $jadwal)
                    <table>
                        <tr>
                            <td><li><b>Acara</b></li></td>
                            <td><b>:</b></td>
                            <td><i>{{$jadwal['acara']}}</i></td>
                        </tr>
                        <tr>
                            <td><b>Jam Tayang</b></td>
                            <td><b>:</b></td>
                            <td><i>{{$jadwal['jam_tayang']}}</i></td>
                        </tr>
                    </table>
                    @endforeach
                    = = = = = = = = = = = = = = = = = = = = = = = <br>
                @endforeach
            </fieldset>
        </div>
    </div>
</body>
</html>