<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    use HasFactory;
    protected $table = 'standard';

    public function azmoonDataTable()
    {
        return $this->hasMany('App\Models\AzmoonData');
    }

    public function azmoonTable()
    {
        return $this->hasMany('App\Models\Azmoon','id3');
    }
}
