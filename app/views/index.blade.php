@extends('_master')


@section('title')
	Office Shopping List
@stop

@section('content')
    <div class="page-header">
        <h1>Shopping List</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ItemController@create') }}" class="btn btn-primary">Add Item</a>
        </div>
    </div>

        @if ($items->isEmpty())
            <p>There are no items!</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Requested By</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->item_brand }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->requestor }}</td>
                        <td>
                        <a href="{{ action('ItemController@edit', $item->id) }}" class="btn btn-default">Edit</a>
                        <small>(<a href="{{ URL::route('delete', $item->id) }}">Delete</a>)</small>
                        <!-- <a href="{{ action('ItemController@delete', $item->id) }}" class="btn btn-danger">Delete</a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @stop