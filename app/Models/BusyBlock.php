<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusyBlock extends Model
{
    use HasFactory;

    protected $table = 'busy_blocks';

    protected $fillable = [
        'block_id',
        'booking_id',
        'start_date',
        'end_date',
        'price_on_book_date'
    ];

    public function block()
    {
        return $this->belongsTo(Block::class, 'block_id', 'id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
