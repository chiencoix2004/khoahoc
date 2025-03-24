<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id'];

    // Mối quan hệ: Lấy danh mục cha
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Mối quan hệ: Lấy danh mục con
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    } 

    public function products()
    {
        return $this->hasMany(Product::class, 'id_category', 'id');
    }
}