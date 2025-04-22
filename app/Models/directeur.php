<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directeur extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_directeur',
        'id_user'
    ];
    
    //
}
