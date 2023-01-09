<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    public function scopeRoles($q)
    {
        return $q->whereNotIn('name', ['owner' ,'admin', 'user']);
    }
}
