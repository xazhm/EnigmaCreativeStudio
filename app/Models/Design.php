<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = ['gambar', 'name', 'detail', 'harga'];

    // Relationship with Pembelian
    public function pembelians()
    {
        return $this->hasMany(Pembelian::class, 'designs_id');
    }
}