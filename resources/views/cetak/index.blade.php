@extends('base')

@section('title')
	CetakPDf
@stop

@section('body')
	<div class="panel panel-default">        
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="customer-table">
                <thead>
                    <tr>                        
                        <th>Nomor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cetak as $show)
                    <tr>
                        <td>{{ $show->nomor }}</td>
                        <td>
                            <div>
                                <a class="btn btn-success" href="{{ route('cetak/pdf', $show->id) }}">Download</a>
                            </div>
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