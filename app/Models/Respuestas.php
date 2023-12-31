<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respuestas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pregunta',
        'respuesta',
        'estado'
    ];

    // public function preguntas(): BelongsTo
    // {
    //     return $this->belongsTo('App\Models\Preguntas','id_respuesta','id_respuesta');
    // }


}
