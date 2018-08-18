<html>
<head>
    <title>DATA PEGAWAI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('app') }}">Peringatan Pegawai</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('app') }}">Daftar Pegawai</a></li>
            <li><a href="{{ URL::to('app/create') }}">Tambah Data</a></li>
        </ul>
    </nav>

    <h1>Seluruh Pegawai</h1>

    @if(Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>NIP</td>
                <td>NAMA</td>
                <td>TEMPAT LAHIR</td>
                <td>PILIHAN</td>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $key => $value) 
                <tr>
                    <td>{{ $value->nip }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->tempat_lahir }}</td>
                    <td>
                        {{ Form::open(array('url' => 'app/' . $value->nip, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Hapus data ini', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                        <a class="btn btn-small btn-success" href="{{ URL::to('app/' . $value->nip) }}">Info</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('app/' . $value->nip . '/edit') }}">Ubah</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>