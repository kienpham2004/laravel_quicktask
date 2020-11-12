<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id_order', 
        'user_id', 
        'order_name',
        'create_at',
        'update_at',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
