<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function departments() {
        return $this->hasMany('App\Models\Department', 'university_id', 'id');
    }
}
