<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoMenor extends Model
{
    use HasFactory;
    protected $table = 'contratos_menores';
    protected $fillable = [
        'expediente', 'tipo', 'objeto', 'estado', 'fecha', 'importe', 'adjudicatario'
    ];
}
