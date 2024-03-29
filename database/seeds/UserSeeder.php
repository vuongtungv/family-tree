<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'admin',
            'full_name' => 'Tung Vuong',
            'email' => 'vuongtungv@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
