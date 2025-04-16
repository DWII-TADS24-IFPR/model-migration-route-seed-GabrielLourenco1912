<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{
    use SoftDeletes;
    protected $table = 'roles';
    protected $fillable = ['name'];

    public function user()
    {
        return $this-> hasMany(User::class);
    }
    public function permission()
    {
        return $this-> hasMany(Permission::class);
    }
}
