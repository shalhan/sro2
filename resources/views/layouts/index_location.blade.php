@extends('master')

@section('header-content')
    Lokasi Rumah Sakit Restitusi
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    </h3>
                </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rumah Sakit</th>
                                <th>Alamat</th>
                                <th>Region</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($location as $r)
                            <tr>
                                <td>{{$r->nama_rs}}</td>
                                <td>{{$r->alamat}}</td>
                                <td>
                                    <?php 
                                        if($r->status == 0)
                                            echo "Wilayah Sumbar & Area Padang (Dalam Kota Padang)";
                                        else if($r->status == 1)
                                            echo "Area Padang";
                                        else if($r->status == 2)
                                            echo "Bukit Tinggi";
                                        else if($r->status == 3)
                                            echo "Payakumbuh";
                                        else if($r->status == 4)
                                            echo "Solok";
                                        else 
                                            echo "Unit Pelayanan Transmisi Padang";
                                    ?>
                                </td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
                            
    </div>
</div>
@endsection