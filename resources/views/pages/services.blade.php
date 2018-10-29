@extends('layouts.tk')

@section('content')
<div class="panel panel-default articles">
    <div class="panel-heading">
        Kerusakan
        <ul class="pull-right panel-settings panel-button-tab-right">
            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                <em class="fa fa-cogs"></em>
            </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li><a href="/services/create">
                                <em class="fa fa-cog"></em> Tambah Data
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body articles-container">
        <div class="article border-bottom">
            <div class="col-xs-12">
                @if(count($services) > 0)
                    @foreach($services as $services)
                        <div class="row">
                            <div class="col-xs-2 col-md-2 date">
                            <div class="large">{{$services->created_at}}</div>
                            <div class="text-muted">{{$services->nama_user}}</div>
                            </div>
                            <div class="col-xs-10 col-md-10">
                            <h4><a href="#">{{$services->nama_perangkat}}</a></h4>
                            <p>{{$services->keterangan}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>Kerusakan not found</h3>
                @endif
            </div>
            <div class="clear"></div>
        </div><!--End .article-->
        
        
    </div>
</div><!--End .articles-->

@endsection