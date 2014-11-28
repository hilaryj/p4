<?php

// app/controllers/GamesController.php

class ItemController extends BaseController
{
    public function index()
{
    // Show a listing of items.
    $items = Item::all();
    return View::make('index', compact('items'));
}

    public function create()
    {
        // Show the add item form.
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
    }

    public function edit(Item $item)
    {
        // Show the edit item form.
        return View::make('edit');
    }

    public function handleEdit()
    {
        // Handle edit form submission.
    }

    public function delete()
    {
        // Show delete confirmation page.
        return View::make('delete');
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
    }
}