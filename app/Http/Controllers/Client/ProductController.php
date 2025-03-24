<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
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

    public function index()
    {
        // Lấy giá trị sort từ query string
        $sort = request('sort', 'default');

        // Tạo query cơ bản để lấy sản phẩm (không gọi get() ngay)
        $query = Product::query();

        // Áp dụng sắp xếp dựa trên giá trị sort
        switch ($sort) {
            case 'date-old-new':
                $query->orderBy('created_at', 'asc'); // Cũ nhất
                break;
            case 'date-new-old':
                $query->orderBy('created_at', 'desc'); // Mới nhất
                break;
            case 'price-low-high':
                $query->orderBy('price_sale', 'asc'); // Giá: thấp đến cao
                break;
            case 'price-high-low':
                $query->orderBy('price_sale', 'desc'); // Giá: cao đến thấp
                break;
            case 'alpha-a-z':
                $query->orderBy('name', 'asc'); // Tên: A-Z
                break;
            case 'alpha-z-a':
                $query->orderBy('name', 'desc'); // Tên: Z-A
                break;
            default:
                $query->orderBy('created_at', 'desc'); // Mặc định: Mới nhất
                break;
        }

        // Lấy sản phẩm với phân trang
        $listProduct = $query->paginate(12);

        // Tính toán phần trăm giảm giá (cách tối ưu hơn sẽ được đề xuất bên dưới)
        foreach ($listProduct as $product) {
            if ($product->price > 0 && $product->price_sale < $product->price) {
                $discountPercent = (($product->price - $product->price_sale) / $product->price) * 100;
                $product->discount_percent = round($discountPercent, 0);
            } else {
                $product->discount_percent = 0;
            }
        }

        // Lấy danh mục cha và con với Eager Loading
        $categories = Category::with('children')->whereNull('parent_id')->orWhere('parent_id', 0)->get();

        return view('client.contents.products.listproduct', compact('listProduct', 'categories'));
    }


    public function listProductCategory($slug)
    {
        // Lấy danh mục theo slug
        $categoryProduct = Category::where('slug', $slug)->firstOrFail();
        if (!$categoryProduct) {
            abort(404); // Hoặc hiển thị sản phẩm mặc định 
        }
        // Lấy danh mục cha và con với Eager Loading để giảm số truy vấn
        $categories = Category::with('children')->whereNull('parent_id')->orWhere('parent_id', 0)->get();

        // Lấy giá trị sort từ query string
        $sort = request('sort', 'default');

        // Tạo query cơ bản để lấy sản phẩm
        $query = $categoryProduct->products();

        // Áp dụng sắp xếp dựa trên giá trị sort
        switch ($sort) {
            case 'date-old-new':
                $query->orderBy('created_at', 'asc'); // Cũ nhất
                break;
            case 'date-new-old':
                $query->orderBy('created_at', 'desc'); // Mới nhất
                break;
            case 'price-low-high':
                $query->orderBy('price_sale', 'asc'); // Giá: thấp đến cao
                break;
            case 'price-high-low':
                $query->orderBy('price_sale', 'desc'); // Giá: cao đến thấp
                break;
            case 'alpha-a-z':
                $query->orderBy('name', 'asc'); // Tên: A-Z
                break;
            case 'alpha-z-a':
                $query->orderBy('name', 'desc'); // Tên: Z-A
                break;
            default:
                $query->orderBy('created_at', 'desc'); // Mặc định: Mới nhất
                break;
        }

        // Lấy sản phẩm với phân trang, áp dụng sắp xếp từ $query
        $listProduct = $query->paginate(12);

        // Tính toán phần trăm giảm giá (cách tối ưu hơn sẽ được đề xuất bên dưới)
        foreach ($listProduct as $product) {
            if ($product->price > 0 && $product->price_sale < $product->price) {
                $discountPercent = (($product->price - $product->price_sale) / $product->price) * 100;
                $product->discount_percent = round($discountPercent, 0);
            } else {
                $product->discount_percent = 0;
            }
        }

        // Truyền danh sách sản phẩm vào view
        return view('client.contents.products.listProduct', compact('listProduct', 'categoryProduct', 'categories'));
    }

    // public function search(Request $request)
    // {
    //     // Lấy từ khóa tìm kiếm từ request
    //     $search = $request->input('search');

    //     // Tạo query cơ bản
    //     $query = Product::query()->select('image', 'name', 'price_sale', 'price', 'slug', 'buys', 'view');

    //     // Áp dụng tìm kiếm nếu có từ khóa
    //     if ($search) {
    //         $query->where('name', 'like', "%{$search}%");
    //     }

    //     // Lấy giá trị sort từ query string
    //     $sort = $request->input('sort', 'default');

    //     // Áp dụng sắp xếp dựa trên giá trị sort
    //     switch ($sort) {
    //         case 'date-old-new':
    //             $query->orderBy('created_at', 'asc'); // Cũ nhất
    //             break;
    //         case 'date-new-old':
    //             $query->orderBy('created_at', 'desc'); // Mới nhất
    //             break;
    //         case 'price-low-high':
    //             $query->orderBy('price_sale', 'asc'); // Giá: thấp đến cao
    //             break;
    //         case 'price-high-low':
    //             $query->orderBy('price_sale', 'desc'); // Giá: cao đến thấp
    //             break;
    //         case 'alpha-a-z':
    //             $query->orderBy('name', 'asc'); // Tên: A-Z
    //             break;
    //         case 'alpha-z-a':
    //             $query->orderBy('name', 'desc'); // Tên: Z-A
    //             break;
    //         default:
    //             $query->orderBy('created_at', 'desc'); // Mặc định: Mới nhất
    //             break;
    //     }

    //     // Lấy sản phẩm với phân trang
    //     $listProduct = $query->paginate(12);

    //     // Tính toán discount_percent cho từng sản phẩm
    //     foreach ($listProduct as $product) {
    //         if ($product->price > 0 && $product->price_sale < $product->price) {
    //             $discountPercent = (($product->price - $product->price_sale) / $product->price) * 100;
    //             $product->discount_percent = round($discountPercent, 0);
    //         } else {
    //             $product->discount_percent = 0;
    //         }
    //     }

    //     // Lấy danh mục (nếu cần)
    //     $categories = Category::with('children')->whereNull('parent_id')->orWhere('parent_id', 0)->get();

    //     // Truyền dữ liệu vào view
    //     return view('client.contents.products.listProduct', compact('listProduct', 'search', 'categories'));
    // }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $query = Product::query()->select('image', 'name', 'price_sale', 'price', 'slug', 'buys', 'view');

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        $sort = $request->input('sort', 'default');

        switch ($sort) {
            case 'date-old-new':
                $query->orderBy('created_at', 'asc');
                break;
            case 'date-new-old':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price-low-high':
                $query->orderBy('price_sale', 'asc');
                break;
            case 'price-high-low':
                $query->orderBy('price_sale', 'desc');
                break;
            case 'alpha-a-z':
                $query->orderBy('name', 'asc');
                break;
            case 'alpha-z-a':
                $query->orderBy('name', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $listProduct = $query->paginate(12);

        $categories = Category::with('children')->whereNull('parent_id')->orWhere('parent_id', 0)->get();

        return view('client.contents.products.search', compact('listProduct', 'search', 'categories'));
    }
}
