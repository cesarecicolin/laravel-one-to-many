<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserDetail extends Model
{
    use HasFactory;

    public function user(){

        $user = Auth::user();
        return $this->belongsTo(User::class);
    }
}
