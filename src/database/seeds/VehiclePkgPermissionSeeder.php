<?php
namespace Abs\VehiclePkg\Database\Seeds;

use App\Permission;
use Illuminate\Database\Seeder;

class VehiclePkgPermissionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$permissions = [
			//Vehicle Makes
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'vehicle-makes',
				'display_name' => 'Vehicle Makes',
			],
			[
				'display_order' => 1,
				'parent' => 'vehicle-makes',
				'name' => 'add-vehicle-make',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'vehicle-makes',
				'name' => 'edit-vehicle-make',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'vehicle-makes',
				'name' => 'delete-vehicle-make',
				'display_name' => 'Delete',
			],

			//Vehicle Models
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'vehicle-models',
				'display_name' => 'Vehicle Models',
			],
			[
				'display_order' => 1,
				'parent' => 'vehicle-models',
				'name' => 'add-vehicle-model',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'vehicle-models',
				'name' => 'edit-vehicle-model',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'vehicle-models',
				'name' => 'delete-vehicle-model',
				'display_name' => 'Delete',
			],

			//Vehicles
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'vehicles',
				'display_name' => 'Vehicles',
			],
			[
				'display_order' => 1,
				'parent' => 'vehicles',
				'name' => 'add-vehicle',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'vehicles',
				'name' => 'edit-vehicle',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'vehicles',
				'name' => 'delete-vehicle',
				'display_name' => 'Delete',
			],
			[
				'display_order' => 3,
				'parent' => 'vehicles',
				'name' => 'view-vehicle',
				'display_name' => 'View',
			],

		];
		Permission::createFromArrays($permissions);
	}
}