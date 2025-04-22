<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin;


class utilisateur extends Model
{

    use HasFactory;
    protected $fillable = [
        'id_user',
        'nom',
        'prenom',
        'email',
        'password',
        'role',
    ];
    public function caissiere()
    {
        return $this->hasOne(caissiere::class, 'id_user', 'id_user');
    }
    
 
    
   


    // Removed duplicate $fillable declaration

}

