<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $fecha
 * @property $lugar
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noticia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'descripcion', 'fecha', 'lugar'];


}
