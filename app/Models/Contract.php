<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';

    protected $fillable = [
        'client_name',
    ];

    function user()
    {
        return $this->hasOne(User::class, 'contract_id', 'id');
    }
}
