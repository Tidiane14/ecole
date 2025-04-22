<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{

    protected $fillable =[
        'id_role',
        'nom_role',
        'id_user',
    ];
    public function role()
    {
        return $this->belongsTo(role::class, 'id_user');
    }
}
