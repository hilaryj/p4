@extends('_master')

@section('content')
    <div class="page-header">
        <h1>Edit Item</h1>
    </div>

    <form action="{{ action('ItemController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $item->id }}">

        <div class="form-group">
            <label for="item_name">Item</label>
            <input type="text" class="form-control" name="item_name" value="{{ $item->item_name }}" />
        </div>
        <div class="form-group">
            <label for="item_brand">Brand</label>
            <input type="text" class="form-control" name="item_brand" value="{{ $item->item_brand }}" />
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{ $item->quantity }}" />
        </div>
        <div class="form-group">
            <label for="requestor">Requested by</label>
            <input type="text" class="form-control" name="requestor" value="{{ $item->requestor }}" />
        </div>
        <div class="form-group">
            <label for="urgent">Urgent?</label>
            <input type="checkbox" class="form-control" name="urgent" value="{{ $item->urgent }}" />
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('ItemController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop