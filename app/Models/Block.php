<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $table = 'blocks';

    protected $fillable = [
        'building_id', 'current_rent_price'
    ];

    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }
}
