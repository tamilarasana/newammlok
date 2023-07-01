<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

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
