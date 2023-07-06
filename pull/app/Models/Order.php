<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'design_id',
        'order_date',
        'struk',
        'status',
        'slug',
    ];

    protected $attributes = [
        'status' => 'pending'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function designs()
    {
        return $this->belongsTo(Design::class, 'design_id');
    }
}
