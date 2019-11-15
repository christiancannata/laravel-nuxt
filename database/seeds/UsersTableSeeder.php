<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //simple users
        factory(App\User::class, 10)->states(['user','company'])->create();
        factory(App\Company::class, 5)->create();

    }
}
