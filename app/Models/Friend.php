<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function givers()
    {
        return $this->hasMany(SecretFriend::class, 'gifs_id');
    }

    public function receivers()
    {
        return $this->hasMany(SecretFriend::class, 'recivers_id');
    }
}
