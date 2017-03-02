@extends('master')

@section('header-content')

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Restitution Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
          <form action="{{route('create')}}" method="post">
             {{csrf_field()}}
                <div class="box-body">
                 <div class="form-group">
                        <label>Nama pegawai</label>
                        <select class="form-control" name="name">
                            @foreach($user as $users)
                                <option value="{{$users->id}}">{{ $users->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rumah Sakit</label>
                        <select class="form-control" name="nama_rs">
                            <option>(Pilih lokasi rumah sakit)</option>
                            @foreach($location as $locations)
                                <option value="{{$locations->id}}">{{ $locations->nama_rs}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipe Pengobatan</label>
                        <select class="form-control" name="keluhan">
                            <option>(Jenis keluhan)</option>
                            @foreach($info as $infos)
                                <option value="{{$infos->id}}">{{ $infos->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                  
                </div>
                    <!-- /.box-body -->

                <div class="box-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>          
                </div>
            </form>
         
        </div>
    </div>
</div>
@endsection