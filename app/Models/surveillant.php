<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surveillant extends Model
{
    Use HasFactory;
    protected $fillable = [
        'id_surveillant',
        'id_user',
    ];
    
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
