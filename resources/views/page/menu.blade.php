<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><b>DATA MENU</b></legend>
        @foreach ($menu as $daftar)
            <ul>
                <li>{{$daftar['pilihan']}}</li>
                @if(isset($daftar['kategori']))
                    <ul>
                        @foreach ($daftar['kategori'] as $kategori)
                            <li>{{$kategori['pilihankategori']}}</li>
                            <ul>
                                @if(isset($kategori['menu']))
                                    @foreach ($kategori['menu'] as $menu)
                                        <li>{{$menu}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        @endforeach
                    </ul>
                @endif
            </ul>
        @endforeach
    </fieldset>
</body>
</html>