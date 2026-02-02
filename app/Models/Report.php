<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Report extends Model
{
    protected $fillable = ['title', 'content', 'sender_name', 'email', 'product_id', 'user_id', 'status', 'reply_content', 'is_read'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
