<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    // Define the table name explicitly
    protected $table = 'users';

    protected $fillable = [
        'uniqueid',
        'nickname',
        'username',
        'email',
        'password',
    ];
    
}
