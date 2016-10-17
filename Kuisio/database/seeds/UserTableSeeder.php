<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();
        User::create(
        	array(
        		'name' => 'admin',
        		'email' => 'admin@kuisio.com',
        		'password' => Hash::make('admin')

        		));
    }
}
