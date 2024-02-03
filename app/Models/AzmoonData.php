<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AzmoonData extends Model
{
    use HasFactory;
    protected $table = 'azmoon_data';
    // protected $primaryKey = 'azmoon_id';
    
    // public function standard()
    // {
    //     return $this->belongsTo('App\Models\Standard', 'standard_id');
    // }
}
