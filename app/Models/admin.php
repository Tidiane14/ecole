<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class admin extends Model
{
   protected $table = 'admin';
   protected $primaryKey = 'id_admin';    
    public $timestamps = false; // Disable timestamps if not used
    protected $fillable = [
        'id_admin',
       'id_user',
    ];


    public function admin ()
    {
        return $this->belongsTo(admin::class, 'id_user', 'id_user');
    }

}
