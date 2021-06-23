<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function university() {
        return $this->belongsTo(University::class);
    }

    /**
        * The roles that belong to the Staff
        *
        * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
        */
    public function department(): BelongsToMany
    {
        return $this->belongsToMany(Department::class)->withTimestamps();
    }
}
