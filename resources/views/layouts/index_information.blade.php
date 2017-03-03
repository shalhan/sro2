@extends('master')

@section('header-content')
    Informasi Restitusi
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Jenis Perawatan Yang Ditanggung PLN
                    </h3>
                </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Perawatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($info1 as $r)
                            <tr>
                                <td>{{$r->id}}</td>
                                <td>{{$r->jenis}}</td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>                  
    </div>
</div>
<div class="row">
     <div class="col-xs-12">
        <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Jenis Perawatan Yang Tidak Ditanggung PLN
                    </h3>
                </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="example3" class="table table-bordered table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Perawatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i= 1 ?>
                            @foreach($info2 as $r)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$r->jenis}}</td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
        </div>    
    </div>
</div>
@endsection