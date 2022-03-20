<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function (Blueprint $table) {
			$table->integer('id',true);
			$table->string('name',15);
			$table->string('description',30)->nullable();
			$table->string('categorie',15);
			$table->integer('amount');
			$table->float('price');
			$table->timestamps();
		});

		DB::table('articles')->insert([
			'name' => 'name1',
			'description' => 'description1',
			'categorie' => 'categorie1',
			'amount' => 1,
			'price' => 1.20
		]);

		DB::table('articles')->insert([
			'name' => 'name2',
			'description' => 'description2',
			'categorie' => 'categorie2',
			'amount' => 2,
			'price' => 2.20
		]);

		DB::table('articles')->insert([
			'name' => 'name3',
			'description' => 'description3',
			'categorie' => 'categorie3',
			'amount' => 3,
			'price' => 3.20
		]);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('articles');
	}
};
