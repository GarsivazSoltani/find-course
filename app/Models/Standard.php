<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Standard extends Model
{
    use HasFactory;
    protected $table = 'standard';

    public function azmoonDataTable(): HasMany
    {
        return $this->hasMany(AzmoonData::class);
    }

    public function azmoonTable(): HasMany
    {
        return $this->hasMany(Azmoon::class);
    }

    public function allData(): HasManyThrough
    {
        // return $this->hasManyThrough(AzmoonData::class, Azmoon::class);
        return $this->hasManyThrough(
            AzmoonData::class,
            Azmoon::class,
            'standard_id', // Foreign key on the azmoon_data table...
            'azmoon_code', // Foreign key on the azmoon table...
            'id', // Local key on the standard table...
            'id' // Local key on the azmoon table...
        );
    }
}
