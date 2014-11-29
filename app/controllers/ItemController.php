<?php

// app/controllers/ItemController.php

class ItemController extends BaseController
{
    public function index()
    {
        // List all items
        $items = Item::with('tag')->get();
        return View::make('index', compact('items'));
    }

    public function create()
    {
        // Show the add item form
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle add item submission
        $item = new Item; // () ?
        $item->item_name    = Input::get('item_name');
        $item->item_brand   = Input::get('item_brand');
        $item->quantity     = Input::get('quantity');
        $item->requestor    = Input::get('requestor');
        
        $item->save();
        
        $tag = new Tag;
        $tag->urgent        = Input::has('urgent'); // Has vs get
        $tag->save();
        
        $item->tags()->attach($tag);
        

        return Redirect::action('ItemController@index');
    
    }

    public function edit(Item $item)
    {
        // Show the edit item form
        return View::make('edit', compact('item'));
    }

    public function handleEdit()
    {
        // Handle edit item submission
        $item = Item::findOrFail(Input::get('id'));
        $item->item_name     = Input::get('item_name');
        $item->item_brand    = Input::get('item_brand');
        $item->quantity      = Input::get('quantity');
        $item->requestor     = Input::get('requestor');
        
        
        $item->urgent        = Input::has('urgent');
        $item->save();

        return Redirect::action('ItemController@index');
    }

    public function delete()
    {
        // Show delete confirmation page.
        return View::make('delete');
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('item');
        $item = Item::findOrFail($id);
        $item->delete();

    return Redirect::action('ItemController@index');
    }
}