<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function listProduct()
    {
        $listProduct = Product::with('category')->orderBy('created_at', 'desc')->paginate(9);
        return view('admin.contents.products.listproduct', compact('listProduct'));
    }
    public function addProduct()
    {
        $categories = Category::whereNull('parent_id')->get(); // Chỉ lấy danh mục cha
        return view('admin.contents.products.addProduct', compact("categories"));
    }

    public function getSubCategories($parentId)
    {
        $subCategories = Category::where('parent_id', $parentId)->get(['id', 'name']);
        return response()->json($subCategories);
    }

    public function addProductNew(Request $request)
    {

        $validatedData = $request->validate([
            // 'name' => 'required|string|max:200',
            // 'price' => 'required|numeric',
            // 'price_sale' => 'numeric',
            // 'view' => 'numeric',
            // 'buys' => 'numeric',
            // 'folder_url' => 'string',
            // 'description' => 'required|string',
            // 'category' => 'required|string',
            'total_course' => 'nullable|numeric',
            'name' => 'required|string|max:200',
            'price' => 'required|numeric',
            'price_sale' => 'nullable|numeric',
            'view' => 'nullable|numeric',
            'buys' => 'nullable|numeric',
            'folder_url' => 'nullable|string',
            'description' => 'required|string',
            'category' => 'required|integer|exists:categories,id', // Kiểm tra nếu category tồn tại
            'croppedImage' => 'required|string', // Kiểm tra dữ liệu base64 từ ảnh đã cắt
        ], [
            'name.max' => 'Tên không được quá 200 kí tự.',
            'name.required' => 'Tên không được để trống.',
            'price.required' => 'Giá không được để trống.',
            'description.required' => 'Nội dung không được để trống.',
            'category.required' => 'Danh mục không được để trống.',
            'croppedImage.required' => 'Ảnh không được để trống.',
            'category.exists' => 'Danh mục không tồn tại.',
        ]);

        // Xử lý ảnh cắt
        $croppedImage = $request->croppedImage; // Nhận dữ liệu base64 từ input hidden
        $imagePath = '';

        if ($croppedImage) {
            // Tách phần header base64 và nội dung
            list($type, $croppedImage) = explode(';', $croppedImage);
            list(, $croppedImage) = explode(',', $croppedImage);

            // Kiểm tra xem dữ liệu có phải base64 hợp lệ không
            if (base64_encode(base64_decode($croppedImage, true)) === $croppedImage) {
                // Giải mã base64 về dạng nhị phân
                $croppedImage = base64_decode($croppedImage);

                // Đặt tên file và đường dẫn lưu
                $imageName = time() . '.jpg';
                $imagePath = 'images/products_image/' . $imageName;

                // Lưu file vào thư mục public 
                file_put_contents(public_path($imagePath), $croppedImage);
            } else {
                return back()->withErrors(['croppedImage' => 'Dữ liệu ảnh không hợp lệ.']);
            }
        }

        $category = Category::find($request->category); // Tìm danh mục theo ID
        $timestamp = date('Ymd');  // Năm-tháng-ngày 
        $randomNumber = rand(1000, 9999);
        Product::create([
            'total_course' => $request->total_course,
            'name' => $request->name,
            'slug' => Str::slug($request->name . '-' . $timestamp . '-' . $randomNumber),
            'price' => $request->price,
            'price_sale' => $request->price_sale ?? 0, // Nếu không có giá sale, mặc định là 0
            'description' => $request->description,
            'image' => $imagePath,
            'id_category' => $request->category ?? null,
            'view' => $request->view ?? 0, // Mặc định là 0 nếu không có view
            'folder_url' => $request->folder_url ?? '', // Mặc định là chuỗi rỗng nếu không có folder_url
            'buys' => $request->buys ?? 0, // Mặc định là 0 nếu không có giá trị
        ]);
        // Redirect with success message
        return redirect()->route('admin.products.listProduct')->with('success', 'Thêm Sản Phẩm Thành Công!');
    }

    public function detailProduct($slug)
    {
        $detailProduct = Product::with('category')->where('slug', $slug)->first();
        return view('admin.contents.products.detailProduct', compact('detailProduct'));
    }

    public function deleteProduct($slug)
    {
        Product::where('slug', $slug)->first()->delete();
        return redirect()->route('admin.products.listProduct')->with('success', 'Xóa Sản Phẩm Thành Công!');
    }

    public function editProduct($slug)
    {
        $editProduct = Product::with('category')->where('slug', $slug)->firstOrFail();
        $categories = Category::whereNull('parent_id')->get(); // Lấy danh mục cha

        return view('admin.contents.products.editProduct', compact('editProduct', 'categories'));
    }

    public function editProductNew(Request $request, $slug)
    {
        // Tìm shop cần cập nhật dựa trên slug
        $product = Product::where('slug', $slug)->firstOrFail();

        $request->validate([
            'total_course' => 'nullable|numeric',
            'name' => 'required|string|max:200',
            'price' => 'required|numeric',
            'price_sale' => 'nullable|numeric',
            'view' => 'nullable|numeric',
            'buys' => 'nullable|numeric',
            'folder_url' => 'nullable|string',
            'description' => 'required|string',
            'category' => 'required|integer|exists:categories,id', // Kiểm tra nếu category tồn tại
            'croppedImage' => 'nullable|string', // Kiểm tra dữ liệu base64 từ ảnh đã cắt
        ], [
            'name.max' => 'Tên không được quá 200 kí tự.',
            'name.required' => 'Tên không được để trống.',
            'price.required' => 'Giá không được để trống.',
            'description.required' => 'Nội dung không được để trống.',
            'category.required' => 'Danh mục không được để trống.', 
            'category.exists' => 'Danh mục không tồn tại.',
        ]);

        // Xử lý ảnh cắt nếu có
        $croppedImage = $request->croppedImage; // Dữ liệu base64 từ input
        $imagePath = $product->image; // Giữ nguyên ảnh cũ nếu không thay đổi

        if ($croppedImage) {
            // Tách phần header base64 và nội dung
            list($type, $croppedImage) = explode(';', $croppedImage);
            list(, $croppedImage) = explode(',', $croppedImage);

            // Kiểm tra dữ liệu base64 hợp lệ
            if (base64_encode(base64_decode($croppedImage, true)) === $croppedImage) {
                // Giải mã base64
                $croppedImage = base64_decode($croppedImage);

                // Đặt tên file và đường dẫn lưu
                $imageName = time() . '.jpg';
                $imagePath = 'images/products_image/' . $imageName;

                // Lưu file vào thư mục public
                file_put_contents(public_path($imagePath), $croppedImage);

                // Xóa ảnh cũ (nếu có)
                if ($product->image && file_exists(public_path($product->image))) {
                    unlink(public_path($product->image));
                }
            } else {
                return back()->withErrors(['croppedImage' => 'Dữ liệu ảnh không hợp lệ.']);
            }
        }

        // Cập nhật thông tin shop
        $timestamp = date('Ymd'); // Năm-tháng-ngày
        $randomNumber = rand(1000, 9999);

        $product->update([
            'total_course' => $request->total_course,
            'name' => $request->name,
            'slug' => Str::slug($request->name . '-' . $timestamp . '-' . $randomNumber),
            'price' => $request->price,
            'price_sale' => $request->price_sale ?? 0, // Nếu không có giá sale, mặc định là 0
            'description' => $request->description,
            'image' => $imagePath,
            'id_category' => $request->category ?? null,
            'view' => $request->view ?? 0, // Mặc định là 0 nếu không có view
            'folder_url' => $request->folder_url ?? '', // Mặc định là chuỗi rỗng nếu không có folder_url
            'buys' => $request->buys ?? 0, // Mặc định là 0 nếu không có giá trị
        ]);

        // Redirect với thông báo thành công
        return redirect()->route('admin.products.listProduct')->with('success', 'Sửa Sản Phẩm Thành Công!');
    }

    public function search(Request $request)
    {
        $search = $request->input('search'); // Lấy từ khóa tìm kiếm

        // Tìm kiếm trong cơ sở dữ liệu
        $listProduct = Product::query()
            ->where('name', 'LIKE', "%{$search}%") // Tìm sản phẩm theo tên 
            ->paginate(10);

        // Trả về view với kết quả tìm kiếm
        return view('admin.contents.products.listProduct', compact('listProduct', 'search'));
    }
}
