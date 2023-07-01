<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color_id',
        'file_name',
        'file_path'
    ];

    /**
     * Get the Colors to Variation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function colors()
    {
        return $this->belongsTo(Colors::class, 'color_id', 'id');
    }
}
