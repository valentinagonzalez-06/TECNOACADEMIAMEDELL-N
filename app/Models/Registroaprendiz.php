<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Registroaprendiz extends Model
{
    use HasFactory;
    protected $fillable=[

        'tipodoc',
        'numiden',
        'depaexp',
        'munexp',
        'fechaexp',
        'fechaven',
        'nombre',
        'apellidos',
        'depanacim',
        'municipionac',
        'fechanacim',
        'genero',
        'estrato',
        'grupoEtnico',
        'discapacidad',
        'pbvulnerable',
        'eps',
        'tiposanguineo',
        'email',
        'cel',
        'direccion',
        'telfijo',
        'nombreapell',
        'celularacud',
        'institucionedu',
        'grado',
        'lineafacilitador',
        'facilitador',
        'subarea',
        'periodicidad',
        'tipoinfo',
        'foto',
    ];
    protected   $table='Registroaprendizs';
}

