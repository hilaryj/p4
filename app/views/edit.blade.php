@extends('_master')

@section('content')
    <div class="page-header">
        <h1>Edit Item</h1>
    </div>

    <div class="formarea">
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

            <div class="checkbox">
                <label for="urgent">
                    <input type="checkbox" name="urgent" /> Urgent?
                </label>
            </div>

            <input type="submit" value="Save" class="btn btn-primary" />
            <a href="{{ action('ItemController@index') }}" class="btn btn-link">Cancel</a>
        </form>
    </div>
@stop