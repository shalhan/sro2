@extends('master')

@section('header-content')
Report
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Report Pegawai</h3>
            </div>
                <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Lokasi</th>
                            <th>ID</th>
                            <th>Created at</th>
                            <th>Message</th>           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($report as $r)
                        <?php  
                            $date = explode(" ", $r->created_at); 
                            $created_at = date("d-m-Y", strtotime($date[0]));
                        ?>
                        <tr>   
                            <td>{{$r->restitution->user->name}}</td>
                            <td>{{$r->restitution->title}}</td>
                            <td>{{$r->restitusi_id}}</td>
                            <td>{{$created_at}}</td>
                            <td>{{$r->message}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection