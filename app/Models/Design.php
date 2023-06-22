<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'harga', 'gambar', 'category_id',
    ];

    // Relationship with Pembelian
    public function pembelians()
    {
        return $this->hasMany(Pembelian::class, 'designs_id');
    }

    // // Relationship with Category
    // public function category()
    // {
    //     return $this->belongsTo(Design::class, 'category_id');
    // }

    // Relationship with Category
public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}

}