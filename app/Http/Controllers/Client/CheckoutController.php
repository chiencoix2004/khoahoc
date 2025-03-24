<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $productSession = session('cart');
        return view("client.contents.checkouts.checkout", compact('productSession'));
    }

    public function addToCart($productId)
    {
        // Tìm sản phẩm theo ID
        $product = Product::find($productId);

        if ($product) {

            session()->forget('cart');
            // Lưu thông tin sản phẩm vào session
            session()->put('cart', [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'price_sale' => $product->price_sale,
                'image' => $product->image,
                'slug' => $product->slug,
                'folder_url' => $product->folder_url,
            ]);
            // Chuyển hướng đến trang nhập thông tin
            return redirect()->route('checkout');
        }

        return redirect()->back()->withErrors('Sản phẩm không tồn tại.');
    }

    public function addToMemberCart(Request $request)
    {
        session()->forget('cart');
        // Lưu thông tin sản phẩm vào session
        session()->put('cart', [
            'name' => 'Gói Cơ Bản',
            'price' => '249000',
            'folder_url' => 'ertafdfafds',
        ]);
        // Chuyển hướng đến trang nhập thông tin
        return redirect()->route('checkout2');
    }
    public function addToMemberCart2(Request $request)
    {
        session()->forget('cart');
        // Lưu thông tin sản phẩm vào session
        session()->put('cart', [
            'name' => 'Gói Nâng Cao',
            'price' => '499000',
            'folder_url' => 'ertafdfafds',
        ]);
        // Chuyển hướng đến trang nhập thông tin
        return redirect()->route('checkout2');
    }
    public function addToMemberCart3(Request $request)
    {
        session()->forget('cart');
        // Lưu thông tin sản phẩm vào session
        session()->put('cart', [
            'name' => 'Gói Cao Cấp',
            'price' => '799000',
            'folder_url' => 'ertafdfafds',
        ]);
        // Chuyển hướng đến trang nhập thông tin
        return redirect()->route('checkout2');
    }
    public function addToMemberCart4(Request $request)
    {
        session()->forget('cart');
        // Lưu thông tin sản phẩm vào session
        session()->put('cart', [
            'name' => 'Gói Mở Shop',
            'price' => '2499999',
            'folder_url' => 'ertafdfafds',
        ]);
        // Chuyển hướng đến trang nhập thông tin
        return redirect()->route('checkout2');
    }
    public function checkout2()
    {
        $productSession = session('cart');
        return view("client.contents.checkouts.checkout2", compact('productSession'));
    }
}
