@extends('_master')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $item->item_name }} </h1>
    </div>
    <form action="{{ action('ItemController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="item_name" value="{{ $item->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('ItemController@index') }}" class="btn btn-default">No.</a>
    </form>
@stop

