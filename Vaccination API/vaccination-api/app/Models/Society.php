<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Society extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'societies';

    protected $fillable = [
        'id',
        'id_card_number',
        'password',
        'name',
        'born_date',
        'gender',
        'address',
        'regional_id',
        'login_token',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'login_tokens',
    ];
}
