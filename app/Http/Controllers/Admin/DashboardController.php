<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRevenue = Order::sum('total');
        $totalOrder = Order::count('id');
        return view("admin.index",compact('totalRevenue','totalOrder'));
    }
}
