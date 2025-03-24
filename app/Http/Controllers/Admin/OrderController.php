<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ListOrder() {
        $ListOrder = Order::orderBy('created_at','desc')->paginate(12);
        return view('admin.contents.orders.ListOrder',compact('ListOrder'));
        
    }

    public function search(Request $request)
    {
        $search = $request->input('search'); // Lấy từ khóa tìm kiếm

        // Tìm kiếm trong cơ sở dữ liệu
        $ListOrder = Order::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('order_id', 'LIKE', "%{$search}%") // Tìm sản phẩm theo tên 
            ->orWhere('email', 'LIKE', "%{$search}%") // Tìm sản phẩm theo tên 
            ->paginate(12);

        // Trả về view với kết quả tìm kiếm
        return view('admin.contents.orders.ListOrder', compact('ListOrder', 'search'));
    }
}
