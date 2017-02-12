@extends('master')

@section('header-content')
Progress Restitusi
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @foreach($restitution as $r)
                <strong>{{$r->title}}
                @if($r->stat_id == 12)
                <span class="label label-success pull-right">Finished</span></strong>
                @else
                <span class="label label-warning pull-right">On Progress...</span></strong>
                @endif
                <p class="text-muted">
                    {{$r->stat->detail}}
                    @if($r->stat_id == 12)
                    <span class="pull-right"><i class="fa fa-exclamation-circle"></i> REPORT</span>
                    @else
                    <a href="{{ url('home/report=' . $r->id) }}" class="pull-right"><i class="fa fa-exclamation-circle"></i> REPORT</a>                    
                    @endif 
                </p>
                <hr>
                @endforeach
            <!-- /.box-body -->
          </div>
    </div>
</div>
@endsection