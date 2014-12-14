@extends('_master')


@section('title')
	Office Shopping List
@stop

@section('content')
    <div class="page-header">
        <h1>Shopping Request Manager</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ItemController@create') }}" class="btn btn-primary">Add Item</a>
        </div>
    </div>

        @if ($items->isEmpty())
            <p>Add an item! The list is empty.</p>
        @else
            <div class="requesttable">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>Requested By</th>
                            <th>Action</th>
                            <th>Urgent?</th>
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
                            <td>
                                @foreach($item->tags as $tag)
                                    {{ $tag->urgent }}  
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @stop