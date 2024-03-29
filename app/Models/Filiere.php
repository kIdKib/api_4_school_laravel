<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasMany(User::class);
    }

    public function classe() {
        return $this->hasMany(Classe::class);
    }
}
