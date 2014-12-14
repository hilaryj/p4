<?php

// app/controllers/ItemController.php

class ItemController extends BaseController
{
    public function index()
    {
        // List all items
        $items = Item::all();
        return View::make('index', compact('items'));
    }

    public function create()
    {
        // Show the add item form
        return View::make('create');
    }

    public function handleCreate()
    {
        // Validate
        $validator = Validator::make(Input::all(), array(
            'item_name' => 'required',
            'quantity' => 'numeric|between:1,15',
            'requestor' => 'required'
        ));
        
        if($validator->fails()) {
            return Redirect::to('/create')
                ->with('flash_message', 'Add Item failed, please try again.')
                ->withInput()
                ->withErrors($validator);
        };
        
        // Handle add item submission
        $item = new Item;
        $item->item_name    = Input::get('item_name');
        $item->item_brand   = Input::get('item_brand');
        $item->quantity     = Input::get('quantity');
        $item->requestor    = Input::get('requestor');
        
        $item->save();
        
        $tag = new Tag;
        $tag->urgent        = Input::has('urgent'); 
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
        
        $tag = new Tag;
        $tag->urgent         = Input::has('urgent');
        $tag->save();
        $item->tags()->attach($tag);
        $item->save();

        return Redirect::action('ItemController@index');
    }

    public function delete(Item $item)
    {
        $item->delete();
        return Redirect::action('ItemController@index');
        
    }

    public function handleDelete($item)
    {
        //echo get_class($item);
        //$item = Item::find('id');
        //$item->delete();
        //Notification::success('The item was deleted!');
        //return Redirect::action('ItemController@index');
    }
}