<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function role() {
        return $this->hasMany('App\User');                  // On détermine le type de relation que le model Role a avec le model User
    }                                                       // Ici : un rôle a plusieurs users
}
