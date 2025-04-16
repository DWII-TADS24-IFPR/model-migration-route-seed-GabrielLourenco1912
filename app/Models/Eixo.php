<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Eixo extends Model
{
    use SoftDeletes;
    protected $table = 'eixos';
    protected $fillable = [
        'nome'
    ];
    public function curso()
    {
        return $this-> hasMany(Curso::class);
    }

}
