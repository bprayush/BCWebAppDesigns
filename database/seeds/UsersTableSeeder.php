<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'admin',
        	'email' => 'admin@karkhana.asia',
        	'password' => bcrypt('karkhana_admin09wasp'),
        	'admin' => 1
        ]);
    }
}
