<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Design extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'designs';

    protected $fillable = [
        'name',
        'description',
        'photo',
        'price',
        'category_id',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $attributes = [
        'status' => 'available'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
