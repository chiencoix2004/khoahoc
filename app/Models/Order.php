<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders'; // Khai báo bảng orders

    protected $primaryKey = 'id'; // Định danh khóa chính là 'id' 

    protected $fillable = [
        'id',
        'name',
        'total',
        'order_id',
        'email',
    ];
}
