<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillabel =[
        'id', 
        'created_at',
        'updated_at',
        'nome',
        'email',
        'senha', 
        'foto', 
        'status', 
        'ativado'
    ];
}
