<?php

namespace App\Models\Authentication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
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
