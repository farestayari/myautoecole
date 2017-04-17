<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    //
    protected $fillable = [
        'nom','prenom', 'password','adresse','cin','telephone','user_id','nationalité',
    ];

    public function candidat(){
        return $this->belongsToMany('\App\User','user_id');
    }
}
