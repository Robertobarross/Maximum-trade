<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    // Para autenticação do usuário
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
