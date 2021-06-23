<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function university() {
        return $this->belongsTo(University::class);
    }

    public function staffs() {
        return $this->belongsToMany(Staff::class)->withTimestamps();
    }
}
