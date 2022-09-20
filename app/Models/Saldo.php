<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal'
    ];

    public function user_roles() {
        return $this->hasOne(UserRole::class);
    }
}
