<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_user',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(utilisateur::class, 'id_user');
    }
}
