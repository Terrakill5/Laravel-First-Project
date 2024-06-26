<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'published_at'
    ];

    /*
    --Si la tabla en la BD tiene la primera letra minuscula y termina en s, no hace falta esto siguiente
    protected $table = 'posts'; */

    protected function casts(): array
    { //Esto sirve para que Eloquent cada vez que recupere published_at lo haga como timestamp y no como string
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName() //Funcion que ocurre para que las instancias usen este atributo en los CRUD
    {
        return 'slug'; //esta cadena indica el nombre del atributo que se buscara de la instancia
    }
}
