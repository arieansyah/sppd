@extends('base')

@section('title')
	Tambah Surat
@stop

@section('head')
    
@stop

@section('body')
	<div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'pegawai']) !!}

                <div class="form-group">
                    {!! Form::label('nip', 'Nip', ['class' => 'control-label']) !!}
                    {!! Form::text('nip', null, ['class' => 'form-control']) !!}
                    <p class="help-block">
                        Nip. 0000000000000000000
                    </p>
                </div>

                <div class="form-group">
                    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
                    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                    <p class="help-block">
                        Nama : Fajar Ghazali
                    </p>
                </div>

                <div class="form-group">
                    {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('#datetimepickers').datetimepicker({
                format: 'DD/MM/YYYY'   
            });
        });
    </script>

@stop