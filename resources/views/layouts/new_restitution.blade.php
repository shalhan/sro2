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
                        <label for="exampleInputEmail1">Nama restitusi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title">
                    </div>
                   <div class="form-group">
                        <label>Nama pegawai</label>
                        <select class="form-control" name="name">
                            @foreach($user as $users)
                                <option value="{{$users->id}}">{{ $users->name}}</option>
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