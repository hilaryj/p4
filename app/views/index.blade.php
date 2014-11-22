@extends('_master')


@section('title')
	Staff Shopping List
@stop

@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
            Left
        </div>
        <div class="col-md-6">
            Left-content
            <a href="/debug">Debug link</a>
        </div>
        <div class="col-md-4">
            Right-content
        </div>
        <div class="col-md-1">
            Right
        </div>
      </div>
    </div>
@stop