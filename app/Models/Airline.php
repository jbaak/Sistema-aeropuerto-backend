<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Airline extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function flights(): hasMany
    {
        return $this->hasMany(Flight::class);
    }
}
