<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Colors;


class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'product_id',
        'color_id',
        'size_id',
        'status',
        'quantity'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function color()
    {
        return $this->belongsTo(Colors::class,'color_id','id');
    }
    public function size()
    {
        return $this->belongsTo(Size::class,'size_id','id');
    }

}
