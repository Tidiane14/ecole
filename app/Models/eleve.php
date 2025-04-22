<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class eleve extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'id',
        'prenom',
        'nom',
        'email',
        'mot_de_passe',
        'id_user',
    ];
    
    public function eleve ()
    {
        return $this->belongsTo(eleve::class, 'id_user');
    }

    public function role ()
    {
        return $this->hasMany(table_role::class, 'id_role');
    }
}   
