@extends('layouts.tk')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            Contact Form
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
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
        <form class="form-horizontal" action="/services" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">ID User</label>
                        <div class="col-md-9">
                            <select id="id_user" name="id_user" type="text" placeholder="Id User" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id}}">{{ $user->id}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Nama</label>
                        <div class="col-md-9">
                            <select id="nama_user" name="nama_user" type="text" placeholder="Nama" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{ $user->name}}">{{ $user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <!-- Nama Perangkat input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Nama Perangkat</label>
                        <div class="col-md-9">
                            <input id="nama_perangkat" name="nama_perangkat" type="text" placeholder="Nama Perangkat" class="form-control">
                        </div>
                    </div>
                    
                    <!-- Keterangan body -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Keterangan</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Created At</label>
                        <div class="col-md-9">
                            <input id="created_at" name="created_at" type="text" placeholder="Created at" class="form-control">
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-12 widget-right">
                            <button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection