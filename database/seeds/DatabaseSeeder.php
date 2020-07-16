<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()                                       // Méthode générale qui lance les seeds listées dessous lors d'un "php artisan db:seed"
    {
        $this->call(UsersTableSeeder::class);                   // On nomme ici les Seeders que l'on veut appliquer
        $this->call(ProfilesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(Roles_UsersTableSeeder::class);
    }
}
