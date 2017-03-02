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
            <div class="box-body report-box">
                @foreach($restitution as $r)
                <div class="col-xs-8">
                    <strong>{{$r->location->nama_rs}}</strong>
                    <p>{{$r->info->jenis}}</p>
                    <p class="text-muted">
                        {{$r->stat->detail}}
                    </p>
                </div>
                <div class="col-xs-4">
                    @if($r->stat_id == 12)
                    <span class="label label-success pull-right">Finished</span></strong>
                    @else
                    <span class="label label-warning pull-right">On Progress...</span></strong>
                    @endif
                    @if($r->stat_id == 12)
                    <span class="pull-right report-btn"><i class="fa fa-exclamation-circle"></i> REPORT</span>
                    @else
                    <a href="{{ url('home/report=' . $r->id) }}" class="pull-right"><i class="fa fa-exclamation-circle"></i> REPORT</a>                    
                    @endif 
                </div>
                @endforeach
               
               
            <!-- /.box-body -->
          </div>
    </div>
</div>
@endsection