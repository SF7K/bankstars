<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'administrator',
        ]);

        DB::table('roles')->insert([
            'name' => 'moderator',
        ]);

        DB::table('roles')->insert([
            'name' => 'simple_user',
        ]);
    }
}

