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
        DB::table('users')->insert([                    // Dans notre DataBase on veut agir sur la table "users"
            'name' => 'Admin',                          // On y insert des valeurs à nos colonnes
            'email' => 'admin@admin.ad',
            'password' => bcrypt('mdpfictif'),          // La méthode bcrypt() permet de crypter une string, pour ne pas ancrer de mot de passe en clair dans notre BDD
        ]);

        DB::table('users')->insert([                    // On répète l'opération pour chaque utilisateur à seeder
            'name' => 'Modérateur',
            'email' => 'modo@mail.com',
            'password' => bcrypt('mdpfictif'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Utilisateur',
            'email' => 'simpleuser@mail.com',
            'password' => bcrypt('mdpfictif'),
        ]);
    }
}
