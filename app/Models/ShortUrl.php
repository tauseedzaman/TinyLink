<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $fillable = [
        'short_code',
        'url',
        'visits',
        'expires_at'
    ];
}
