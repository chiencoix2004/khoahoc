<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 
    protected $fillable = [
        'id_category', 'name', 'slug','description', 'price', 'image', 'view', 'buys', 'price_sale', 'folder_url','total_course'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category'); // Quan hệ với danh mục
    }
    public function categoryParentId()
    {
        return $this->category ? $this->category->parent_id : null;
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }
}
