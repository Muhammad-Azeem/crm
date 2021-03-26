<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InstallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /************************ Roles  *****************************/
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $manager = Role::firstOrCreate(['name' => 'manager']);
        $supervisor = Role::firstOrCreate(['name' => 'supervisor']);
        $customer = Role::firstOrCreate(['name' => 'customer']);

        /************************ Permissions  *****************************/
        $addForm = Permission::firstOrCreate(['name' => 'add-form']);
        $addManager = Permission::firstOrCreate(['name' => 'add-manager']);
        $addSupervisor = Permission::firstOrCreate(['name' => 'add-supervisor']);
        $addCustomer = Permission::firstOrCreate(['name' => 'add-customer']);

        /************************ Create Admin  *****************************/
        $user = User::firstOrCreate(['id' => 1],[
            'f_name' => 'Admin',
            'email' => 'superadmin@crm.com',
            'password' => Hash::make('admin123.'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $user->assignRole('admin');
        /************************ Assign Permission to Roles  *****************************/

        $admin->givePermissionTo([$addForm, $addManager, $addSupervisor, $addCustomer]);
        $manager->givePermissionTo([$addForm, $addSupervisor, $addCustomer]);
        $supervisor->givePermissionTo([$addForm, $addCustomer]);
        $customer->givePermissionTo([$addForm]);

    }
}
