<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'wash_schedule_id',
        'customer_id',
        'status',
    ];

    public function washSchedule()
    {
        return $this->belongsTo(WashSchedule::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
}
