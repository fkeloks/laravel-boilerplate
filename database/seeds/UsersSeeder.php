<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'admin',
            'email'             => 'admin@local.dev',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin'),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
