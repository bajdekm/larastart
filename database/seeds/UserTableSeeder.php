<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = new \App\User();
        $adm->name = 'Admin';
        $adm->email = 'admin@admin.pl';
        $adm->password = bcrypt('password');
        $adm->save();
    }
}
