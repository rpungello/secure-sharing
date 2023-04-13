<?php

namespace App\Models;

use Dyrynda\Database\Support\NullableFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Secret extends Model
{
    use SoftDeletes, HasFactory, NullableFields;

    protected $fillable = [
        'name',
        'value',
        'auth_token',
        'recipient_email',
        'expires_at',
        'viewed_from_ip',
        'viewed_from_user_agent',
    ];

    protected $casts = [
        'value' => 'encrypted',
        'auth_token' => 'encrypted',
        'expires_at' => 'datetime',
    ];

    protected $nullable = [
        'recipient_email',
    ];
}
