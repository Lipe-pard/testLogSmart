<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecretFriend extends Model
{
    use HasFactory;

    protected $fillable = ['recivers_id', 'gifs_id'];
}
