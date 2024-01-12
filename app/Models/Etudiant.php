<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;

    public function langue()
    {
        return $this->belongsToMany(Eleve::class, 'langue_user','user_id', 'langue_id');
    }

    public function classe() {
        return $this->belongsTo(Classe::class);
    }

    public function filiere() {
        return $this->belongsTo(Filiere::class);
    }
}
