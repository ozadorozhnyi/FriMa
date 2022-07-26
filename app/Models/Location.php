<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'name', 'timezone'
    ];

    public function buildings()
    {
        return $this->hasMany(Building::class, 'location_id', 'id');
    }
}
