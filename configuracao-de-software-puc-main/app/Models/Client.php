<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'phone_number',
        'address',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
