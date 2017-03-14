@extends('base')

@section('title')
	Tambah Surat
@stop

@section('head')
    {{ HTML::style('/dist/css/bootstrap-datetimepicker.min.css') }}
    {{ HTML::script('/dist/js/moment.min.js') }}
    {{ HTML::script('/dist/js/transition.js') }}
    {{ HTML::script('/dist/js/collapse.js') }}
    {{ HTML::script('/dist/js/bootstrap-datetimepicker.min.js')}}    
@stop

@section('body')
	<div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url' => 'surat', 'files' => true]) !!}
                <div class="form-group">
                    {{ Form::label('tanggal', 'Tanggal') }}
                    <div class='input-group date' id='datetimepickers'>
                        {{ Form::date('tanggal', null, ['class' => 'form-control']) }}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('nomor', 'Nomor', ['class' => 'control-label']) !!}
                    {!! Form::text('nomor', '', ['class' => 'form-control']) !!}
                    <p class="help-block">
                        Nomor : No. 000/SP/ 0000 /VI/2017
                    </p>
                </div>

                <div class="form-group">
                    {!! Form::label('foto1', 'Foto')!!}
                    {!! Form::file('foto1', null) !!}
                    <p class="help-block">
                        Foto Kegiatan
                    </p>
                </div>

                <div class="form-group">
                    {!! Form::label('foto2', 'Foto')!!}
                    {!! Form::file('foto2', null) !!}
                    <p class="help-block">
                        Foto Kegiatan
                    </p>
                </div>

                <div class="form-group">
                    {!! Form::label('pendahuluan', 'Catatan', ['class' => 'control-label']) !!}
                    {!! Form::textarea('pendahuluan', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('surat_pegawai', "Pegawai") !!}
                    @if(count($list_pegawai) > 0) {{-- untuk mendapatkan array --}}
                        @foreach($list_pegawai as $key => $values)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('surat_pegawai[]', $key, null) !!}
                                    <strong>
                                        @foreach($pegawai as $show)
                                            <span class="text-danger">{{$show->nip}}</span>
                                        @endforeach
                                    - {{ $values }}
                                    </strong>
                                </label>
                            </div>
                        @endforeach
                    @else
                        <p>Masukin Manual</p>
                    @endif
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