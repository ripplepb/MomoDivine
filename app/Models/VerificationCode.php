<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// use Exception;
// use Twilio\Rest\Client;

class VerificationCode extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['mobile_no', 'otp', 'password', 'expire_at'];
}