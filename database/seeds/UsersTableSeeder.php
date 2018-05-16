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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'isAdmin' => true,
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'jonay',
            'email' => 'jonay@jonay.com',
            'isAdmin' => false,
            'password' => bcrypt('jonay'),
        ]);

        DB::table('users')->insert([
            'name' => 'larry',
            'email' => 'larry@larry.com',
            'isAdmin' => false,
            'password' => bcrypt('larry'),
        ]);
    }
}
