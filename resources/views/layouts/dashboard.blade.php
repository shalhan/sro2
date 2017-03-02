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
                            <th>ID</th>
                            <th>Lokasi</th>
                            <th>Nama</th>
                            <th>Created at</th>
                            <th>Progress</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($restitution as $r)
                        <tr>   
                             <?php  
                                $date = explode(" ", $r->created_at); 
                                $created_at = date("d-m-Y", strtotime($date[0]));
                        ?>
                            <td>{{$r->id}}</td>
                            <td>{{$r->location->nama_rs}}</td>
                            <td>{{$r->user->name}}</td>
                            <td>{{$created_at}}</td>
                            <td>{{$r->stat->id}}. {{$r->stat->detail}}</td>
                            <td><a href="{{url('dashboard/update/' . $r->id)}}"> NEXT </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="floating-button">
        <a href="{{route('new')}}"><i class="ion ion-plus-circled"></i></a>
    </div>
</div>
@endsection