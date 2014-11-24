<?php

# Homepage; shopping list main page
Route::get('/', function()
{
	return View::make('index'); # index.blade.php
});
Route::post('/', function() {

});

Route::get('/practice-creating', function() {

    # Creating a tag
    $tag = new Tag;
    $tag->urgent = 0;
    $tag->save();
    
    # Instantiate a new Item model class
    $item = new Item();

    $item->item_name = 'Paper Towels';
    $item->item_brand = 'Marcal';
    $item->quantity = 2;
    $item->requestor = 'Hillary';
    
    $item->save(); # Save first
    
    $item->tags()->attach($tag); 

    return 'You have added an item to the list.';

});

Route::get('/practice-reading', function() {

    $items = Item::all();

    foreach($items as $item) {
        echo $item->requestor.'<br>';
    }

});

Route::get('/practice-updating', function() {

    # Find all items requested by Hilary
    $item = Item::where('requestor', 'LIKE', '%Hilary%')->all();

    # Mispell her name
    $item->requestor = 'Hillary';

    # Save the changes
    $item->save();

    return "Update complete; check the database to see if your update worked...";

});

Route::get('/practice-deleting', function() {

    # First get an item to delete
    $item = Item::where('requestor', 'LIKE', '%Hillary%')->first();

    # Goodbye!
    $item->delete();

    return "Deletion complete; check the database to see if it worked...";

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});