<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('usuarios', function(Blueprint $table) {
			$table->increments('id');
            $table->string('email')->unique();
            $table->text('password');
            $table->string('remember_token')->nullable();
            $table->integer('rol_id')->unsigned();
			$table->timestamps();
			$table->foreign('rol_id')->references('id')->on('rol_usuarios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('usuarios')->delete();
	}

}
