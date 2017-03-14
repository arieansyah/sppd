@extends('base')

@section('title')
	Daftar Pegawai
@stop

@section('body')
	<div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ url('pegawai/create') }}">
                <button type="button" class="btn btn-success" name="button">
                    <span class="fa fa-plus"></span> Tambah
                </button>
            </a>
        </div>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="customer-table">
                <thead>
                    <tr>
                        <th>NIP</th>                        
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $show)
                       <tr>
                       	<td>{{ $show->nip }}</td>
                       	<td>{{ $show->nama }}</td>
                       	<td>
                            {{ link_to('pegawai/' . $show->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                            {{ link_to('pegawai/' . $show->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                            {!! Form::open(['method' => 'DELETE', 'action' => ['PegawaiController@destroy', $show->id]]) !!}
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