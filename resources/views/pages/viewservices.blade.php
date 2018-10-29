@extends('layouts.ta')

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
                            <li><a href="#">
                                <em class="fa fa-cog"></em> Settings
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
    </div>
    <div class="panel-body articles-container">
        <div class="article border-bottom">
            <div class="col-xs-12">
                @if(count($services) > 0)
                    @foreach($services as $services)
                        {{-- <form action="/perbaikan/{{$kerusakan->id}}" method="post"> --}}
                        <div class="row">
                            <div class="col-xs-2 col-md-2 date">
                            <div class="large">{{$services->created_at}}</div>
                            <div class="text-muted">{{$services->nama_user}}</div>
                            </div>
                            <div class="col-xs-8 col-md-8">
                            <h4><a href="#">{{$services->nama_perangkat}}</a></h4>
                            <p>{{$services->keterangan}}</p>
                            </div>
                            {{-- {{ csrf_field() }} --}}
                            <div class="col-xs-2 col-md-2">
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <a href="/viewservices/{{$services->id}}/edit" class="btn btn-warning btn-md pull-right" >Edit</a>
                                    </div>
                                </div>
                                
                                <form action="/viewservices/{{$services->id}}" method="post">
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <input type="submit" name="submit" value="delete" class="btn btn-danger btn-md pull-right">
                                    </div>
                                </div>
                                {{ csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>
                        </div>
                        {{-- </form> --}}

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