<?php
namespace App\Searchable;

trait ProductSearchable {

    public static function searchable()
    {
        $model = static::query();

        $query = app('request');

        if ($query->has('category_id')) {
            $model->where('category_id', $query->category_id);
        }

        if ($query->has('sub_category_id')) {
            $model->where('sub_category_id', $query->sub_category_id);
        }

        if ($query->has('brand_name')) {
            $model->where('brand_name', $query->brand_name);
        }

        return $model->where('status', 1)->paginate(15);
    }
}
