<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //
    protected $fillable = [
        'name','prenom',  'adress','telephone','user_id'
    ];

    public function personnel()
    {
      return $this->belongsToMany('\App\User','user_id');
    }
}
