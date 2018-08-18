<html>
<head>
    <title>FORM INPUT PEGAWAI</title>
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
</div>
    <div class="container">
        <h1>Daftar Baru Pegawai</h1>

        {{ Html::ul($errors->all()) }}

        {{ Form::open(array('url' => 'app')) }}        
        <div class="form-group">
            {{ Form::label('nip', 'NIP') }}
            {{ Form::text('nip', Input::old('nip'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('nama', 'NAMA') }}
            {{ Form::text('nama', Input::old('nama'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('tempat_lahir', 'TEMPAT LAHIR') }}
            {{ Form::text('tempat_lahir', Input::old('tempat_lahir'), array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
        
    </div>
</body>
</html>