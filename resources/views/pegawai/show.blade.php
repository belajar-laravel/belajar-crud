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

    <h1>Informasi {{ $pegawai->nama }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $pegawai->nama }}</h2>
        <p>
            <strong>NIP:</strong> {{ $pegawai->nip }}<br>
            <strong>TEMPAT LAHIR:</strong> {{ $pegawai->tempat_lahir }}
        </p>
    </div>
</div>
</body>
</html>