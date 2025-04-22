<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class caissiere extends Model
{
    protected $table = 'caissiere';
    protected $primaryKey = 'id_caissiere';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_caissiere',
        
    ];
    // Define any relationships or additional methods here

    public function caissiere()
    {
        return $this->belongsTo(caissiere::class, 'id_user', 'id_user');
        
    }
}


