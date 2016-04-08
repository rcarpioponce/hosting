<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDominiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('dominios', function(Blueprint $table) {
			$table->increments('id');
            $table->string('dominio');
            $table->string('usuario_cpanel')->unique();
            $table->integer('paquete_id')->unsigned()->nullable();
            $table->integer('usuario_id')->unsigned()->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->date('fecha_fin')->nullable();
			$table->timestamps();
			$table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		DB::table('dominios')->delete();
	}

}
