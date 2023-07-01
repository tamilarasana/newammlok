<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;

    /**
     * Get the Colors to Variation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function colors()
    {
        return $this->belongsTo(Colors::class, 'color', 'id');
    }

    /**
     * Get the Colors to Variation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sizes()
    {
        return $this->belongsTo(Size::class, 'size', 'id');
    }
}
