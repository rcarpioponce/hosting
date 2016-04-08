<?php
use AppHosting\Entities\Rol;
class RolesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Rol::create(array('id'=>1,'nombre' => 'superadmin','descripcion'=>'dueño del servidor'));
		Rol::create(array('id'=>2,'nombre' => 'revendedor','descripcion'=>'revendedores colaboradores'));
	}
}
