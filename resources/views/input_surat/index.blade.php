@extends('base')

@section('title')
	Surat Perjalanan Dinas
@stop

@section('body')
	<div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ url('surat/create') }}">
                <button type="button" class="btn btn-success" name="button">
                    <span class="fa fa-plus"></span> Tambah
                </button>
            </a>
        </div>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="customer-table">
                <thead>
                    <tr>                        
                        <th>Tanggal</th>
                        <th>Nomor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($surat as $show)
                   <tr>
                   	<td>{{ $show->tanggal }}</td>
                   	<td>{{ $show->nomor }}</td>
                   	<td>
                        {{ link_to('surat/' . $show->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                        {{ link_to('surat/' . $show->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                        {!! Form::open(['method' => 'DELETE', 'action' => ['SuratController@destroy', $show->id]]) !!}
                            {!! Form::submit("Delete", ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                   </tr>
                @endforeach
                </tbody>
            </table>  
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#customer-table').DataTable({
            responsive: true
        });
    });
    </script>
@stop