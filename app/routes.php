<?php

# Homepage
Route::get('/', function()
{
	return View::make('index'); # index.blade.php
});

Route::get('/practice', function() {

    $fruit = Array('Apples', 'Oranges', 'Pears');

    echo Pre::render($fruit,'Fruit');

});

# Create Your Own Personas
Route::get('/create', function() {
	return View::make('create');
});
Route::post('/create', function() {

});

# Random User Generator
Route::get('/generate', function() {
	return View::make('generate');
});
Route::post('/generate', function() {

});


# Login page?
