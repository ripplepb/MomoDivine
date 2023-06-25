<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_hourly extends Model
{
    use HasFactory;

    public function hour()
    {
        return $this->belongsTo(TaxiFare::class, 'hour_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
