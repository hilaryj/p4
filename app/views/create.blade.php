@extends('_master')

@section('content')
    <div class="page-header">
        <h1>Create Item</h1>
    </div>

        @foreach($errors->all() as $message) 
        <p id='errortext'>{{ $message }}</p>
        @endforeach
    <form action="{{ action('ItemController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" class="form-control" name="item_name" />
        </div>
        <div class="form-group">
            <label for="item_brand">Brand</label>
            <input type="text" class="form-control" name="item_brand" />
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" name="quantity" />
        </div>
        <div class="form-group">
            <label for="requestor">Requested By</label>
            <input type="text" class="form-control" name="requestor" />
        </div>
        <div class="checkbox">
            <label for="urgent">
                <input type="checkbox" name="urgent" /> Urgent?
            </label>
        </div>
        <input type="submit" value="Add" class="btn btn-primary" />
        <a href="{{ action('ItemController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop