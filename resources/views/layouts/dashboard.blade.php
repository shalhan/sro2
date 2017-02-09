@extends('master')

@section('header-content')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Restitution Data</h3>
            </div>
                <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Lokasi</th>
                            <th>Progress</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($restitution as $r)
                        <tr>   
                            <td>{{$r->user->name}}</td>
                            <td>{{$r->user->nip}}</td>
                            <td>{{$r->user->name}}</td>
                            <td>{{$r->title}}</td>
                            <td>{{$r->stat->id}}. {{$r->stat->detail}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="floating-button">
        <a href=""><i class="ion ion-plus-circled"></i></a>
    </div>
</div>
@endsection