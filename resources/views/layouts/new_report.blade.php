@extends('master')

@section('header-content')
Report
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="box box-primary">
            <form action="{{url('home/report=' . $id . '/create')}}" method="post">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="ID Restitusi: {{$id}}" readOnly="true" >
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$id}}">
                    </div>
                    <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="3" placeholder="Enter your message ..." name="message"></textarea>
                    </div>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Send</button>          
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection