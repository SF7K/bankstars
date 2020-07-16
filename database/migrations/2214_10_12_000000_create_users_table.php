<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {                                   // On crée une table nommée "users"
            $table->id();                                                                       // On lui donne des attribus
            $table->string('name');                                                                     
            $table->string('email')->unique();                                                  // Par exemple ici on veut une colonne "email" qui sera une string, et qui devra être unique dans notre BDD
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('role_user', function (Blueprint $table) {                                // En créant la table users, on veut créer la relation entre elle et "role_user" 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     // On crée une clef étrangère (foreign) "user_id" qui prend pour référence la colonne "id" de la table "users"
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');     // La méthode "onDelete" avec l'argument 'cascade' permet, à la suppression d'un utilisateur
        });                                                                                     // de supprimer aussi la clef étrangère avec laquelle il est lié

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');                                                          // Methode pour supprimer la table si elle existe
        Schema::table('role_user', function (Blueprint $table) {                                // Méthode pour supprimer les clefs étrangères
            $table->dropForeing('role_user_user_id_foreign');                                   // Ici entre role_user et user_id
            $table->dropForeing('role_user_role_id_foreign');                                   // et ici entre role_user et role_id
        })
    }
}
