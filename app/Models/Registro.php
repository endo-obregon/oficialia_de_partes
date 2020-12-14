<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_registro',
        'fecha',      
        'asunto', 
        'dependencia', 
        'envia', 
        'destinatario',   
        'seguimiento',   
        'user_id',   
  
    ];
    function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
