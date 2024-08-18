<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Filterable\Interfaces\Filterable as FilterableInterface;
use Filterable\Traits\Filterable as FilterableTrait;

class Flight extends Model
{
    use HasFactory, FilterableTrait;

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function airline(): BelongsTo
    {
        return $this->belongsTo(Airline::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'flight_categories')->withPivot('number_of_seats');
    }
}
