<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get the genders te Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genders()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
