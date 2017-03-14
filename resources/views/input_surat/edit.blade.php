@extends('base')

@section('title')
	Edit
@stop

@section('head')
    {{ HTML::style('/dist/css/bootstrap-datetimepicker.min.css') }}
    {{ HTML::script('/dist/js/moment.min.js') }}
    {{ HTML::script('/dist/js/transition.js') }}
    {{ HTML::script('/dist/js/collapse.js') }}
    {{ HTML::script('/dist/js/bootstrap-datetimepicker.min.js')}}    
@stop

@section('body')
    	{!! Form::model($surat, ['method' => 'PATCH', 'action' => ['SuratController@update', $surat->id]]) !!}
            <div class="form-group">
                {{ Form::label('tanggal', 'Tanggal') }}
                <div class='input-group date' id='datetimepickers'>
                    {{ Form::text('tanggal', '', ['class' => 'form-control', 'required']) }}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('nomor', 'Nomor', ['class' => 'control-label']) !!}
                {!! Form::text('nomor', null, ['class' => 'form-control']) !!}
                <p class="help-block">
                    Nomor : No. 000/SP/ 0000 /VI/2017
                </p>
            </div>
        <div class="form-group">
            {{ Form::submit('Simpan', ['class' => 'btn btn-primary btn-lg btn-block']) }}
        </div>
    {!! Form::close() !!}   

    <script type="text/javascript">
        $(function () {
            $('#datetimepickers').datetimepicker({
                format: 'DD/MM/YYYY'   
            });
        });
    </script>
@stop