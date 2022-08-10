<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offday extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'holiday-type',
        'start_date',
        'end_date',
        'reason',
        'no_of_days',
        'status'
    ];

}
