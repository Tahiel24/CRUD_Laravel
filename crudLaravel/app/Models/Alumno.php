<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//No se vuelve necesario definir atributos y un constructor debido a Eloquent(El ORM que Laravel incluye por default para trabajor con BD orientadas a objetos)
//OBS: Escribir bien el nombre de la variable fillable o dara error
class Alumno extends Model
{
   //Campos permitidos para asignacion masiva, por ejemplo: Alumno::create($request->all())
   protected $fillable = ['name', 'surname', 'email'];
}
