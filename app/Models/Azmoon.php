<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Azmoon extends Model
{
    use HasFactory;
    protected $table = 'azmoon';

    // public function standardTable(): HasMany
    // {
    //     return $this->hasMany(Standard::class);
    // }
}
