<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {

        $ProductHotSale = Cache::remember('hot_sale_products', 1, function () {
            return Product::select('image', 'name', 'price_sale', 'price', 'slug', 'buys', 'view')
                ->where('buys', '>', 0)
                ->orderBy('buys', 'desc')
                ->limit(12) // Hoặc ->take(3)
                ->get(); 
        });

        $CategoryCombo = Cache::remember('combo_products', 60, function () { 
            return Category::where('slug', 'combo-tiet-kiem-4208')->firstOrFail();
                // ->where('view', '>', 0)
                // ->orderBy('view', 'desc')
                // ->limit(3) // Hoặc ->take(3)
                // ->get();
        });   
      
        // Lấy sản phẩm với phân trang, áp dụng sắp xếp từ $query
        $ProductCombo = $CategoryCombo->products()->orderBy('created_at', 'desc')->limit(9)->get();
 
        foreach ($ProductCombo as $product) {
            if ($product->price > 0 && $product->price_sale < $product->price) {
                $discountPercent = (($product->price - $product->price_sale) / $product->price) * 100;
                $product->discount_percent = round($discountPercent, 0);
            } else {
                $product->discount_percent = 0;
            }
        }


        foreach ($ProductHotSale as $product) {
            if ($product->price > 0 && $product->price_sale < $product->price) {
                $discountPercent = (($product->price - $product->price_sale) / $product->price) * 100;
                $product->discount_percent = round($discountPercent, 0);
            } else {
                $product->discount_percent = 0;
            }
        }

        return view("client.index", compact('ProductHotSale','ProductCombo'));
    }


    public function detailProduct($slug)
    {
        $ProductHotSale = Cache::remember('hot_sale_products', 60, function () {
            return Product::select('image', 'name', 'price_sale', 'price', 'slug', 'buys')
                ->where('buys', '>', 0)
                ->orderBy('buys', 'desc')
                ->limit(3) // Hoặc ->take(3)
                ->get();
        });

        $ProductHotView = Cache::remember('hot_view_products', 60, function () {
            return Product::select('image', 'name', 'price_sale', 'price', 'slug', 'view')
                ->where('view', '>', 0)
                ->orderBy('view', 'desc')
                ->limit(3) // Hoặc ->take(3)
                ->get();
        });

        $detailProduct = Product::where('slug', $slug)->first();
        if ($detailProduct) {
            $detailProduct->increment('view'); // Tăng giá trị view lên 1
        }
        return view('client.contents.products.detailProduct', compact('detailProduct', 'ProductHotSale', 'ProductHotView'));
    }
}
