<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($a == "ayam goreng")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 15.000</i></td>
            </tr>
        </table>
    @elseif($a == "lobster")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 20.000</i></td>
            </tr>
        </table>
    @elseif($a == "pizza")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 50.000</i></td>
            </tr>
        </table>
    @elseif($a == "tiramisu")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 30.000</i></td>
            </tr>
        </table>
    @elseif($a == "pasta")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 25.000</i></td>
            </tr>
        </table>
    @else
    <b>Punteun Makanan Teu Aya</b><br>
    @endif
    <b><i>================================</i></b><br>
    @if($a1 == "ayam goreng")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a1}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 15.000</i></td>
            </tr>
        </table>
    @elseif($a1 == "lobster")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a1}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 20.000</i></td>
            </tr>
        </table>
    @elseif($a1 == "pizza")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a1}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 50.000</i></td>
            </tr>
        </table>
    @elseif($a1 == "tiramisu")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a1}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 30.000</i></td>
            </tr>
        </table>
    @elseif($a1 == "pasta")
        <h3><b><i>PUNTEUN GOFOOD !!!</i></b></h3>
        <table>
            <tr>
                <td><b>Pesanan Anda</b></td>
                <td><b>:</b></td>
                <td><i>{{$a1}}</i></td>
                <br>
            </tr>
            <tr>
                <td><b>Harga</b></td>
                <td><b>:</b></td>
                <td><i>Rp 25.000</i></td>
            </tr>
        </table>
    @else
    <b>Punteun Makanan Teu Aya</b>
    @endif
</body>
</html>