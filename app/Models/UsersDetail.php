<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDetail extends Model
{
    use HasFactory;

    protected $table = 'users_details';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
