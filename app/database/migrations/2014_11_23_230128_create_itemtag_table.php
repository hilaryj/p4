<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTagTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	# Create pivot table connecting `items` and `tags`
	public function up() 
	{
		Schema::create('item_tag', function($table) {

			$table->integer('item_id')- >unsigned();
			$table->integer('tag_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
			
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item_tag');
	}
}