<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Searchable\ProductSearchable;

class Product extends Model
{
    use HasFactory, ProductSearchable;

    public function images()
{
    return $this->hasMany('App\Models\ProductImages');
}

// public function genders()
// {
//     return $this->belongsTo('App\Models\Gender');
// }

/**
 * Get the user that owns the Product
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function genders()
{
    return $this->belongsTo(Gender::class, 'gender_id', 'id');
}

public function brands()
{
    return $this->belongsTo(Brand::class, 'brand_name', 'id');
}

   public function getImageAttribute()
{
    return $this->images()->first();
}

public function users()
{
    return $this->belongsToMany(User::class);
}


}
