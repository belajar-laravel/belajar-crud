<html>
<head>
    <title>FORM INPUT PEGAWAI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Daftar Baru Pegawai</h1>
        
        {{ Form::open(array('url' => 'pegawai')) }}        
        <div class="form-group">
            {{ Form::label('nim', 'NIM') }}
            {{ Form::text('nim', Input::old('nim'), array('class' => 'form-control')) }}
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