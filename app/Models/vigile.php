<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vigile extends Model
{

    protected $fillable = [
        'id_vigile',
    ];

    public function role()
    {
        return $this->belongsTo(vigile::class, 'id_user');
    }
}
