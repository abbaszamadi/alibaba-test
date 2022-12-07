<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];


    public function actions()
    {
        return $this->belongsToMany(Action::class, 'actions_roles');
    }


    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }

}
