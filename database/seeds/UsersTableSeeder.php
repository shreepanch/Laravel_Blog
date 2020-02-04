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
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "praveenpcpc",
                'email' => "praveenpcpc@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "praveen chaudhary",
                'email' => "praveen@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "shreepanch",
                'email' => "shreepanch@test.com",
                'password' => bcrypt('secret')
            ],
        ]);
    }
}
