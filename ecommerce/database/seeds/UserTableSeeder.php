<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer=Role::where('name','customer')->first();
        $role_admin=Role::where('name','admin')->first();

        $customer=new User();
        $customer->name="hasan";
        $customer->email="hasan@yahoo.com";
        $customer->password=bcrypt('12345678');
        $customer->save();
        $customer->roles()->attach($role_customer);



        $admin=new User();
        $admin->name="tajul";
        $admin->email="tajulislam8028@gmail.com";
        $admin->password=bcrypt('12345678');
        $admin->save();
        $admin->roles()->attach($role_admin);

        //
    }
}
