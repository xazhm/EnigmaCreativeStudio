<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = ['totalHarga'];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // Relationship with Design
    public function design()
    {
        return $this->belongsTo(Design::class, 'designs_id');
    }
}