<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK JADWAL</title>
</head>
<body>
    <div class="form-group"> <br><br>
        <table width="100%" >
            <tr>
            <td width="30" align="center"><img src="{{asset('assets/dist/img/utm.jpg')}}" width="80%"></td>
            <td width="40" align="center"><h2>UNIVERSITAS TRUNOJOYO MADURA</h2>Jl. Raya Telang, PO. BOX 2 Kamal, Bangkalan - Madura <br> Telp: (031) xxxxxxx. Fax. (xxx) xxxxxxx
            </td>
            <td width="30"> </td>
            </tr>
        </table><hr width="90%"><br>
        <h3 align="center">Jadwal Perkuliahan</h3>
        <br>
        <table class="static" align="center" rules="all" border="1px" style="width: 90%;">
            <tr>
                <th>No</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Ruangan</th>
                <th>Waktu</th>
            </tr>
            @foreach ($dtctkjdwl as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->matakuliah}}</td>
                <td>{{$item->dosen}}</td>
                <td>{{$item->ruangan}}</td>
                <td>{{$item->waktu}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Untuk print window auto-->
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>