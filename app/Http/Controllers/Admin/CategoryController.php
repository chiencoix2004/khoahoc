<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $listCategory = Category::whereNull('parent_id')->paginate(15);
        return view("admin.contents.categories.ListCategory", compact("listCategory"));
    }

    public function detailCategory($slug)
    {
        // Lấy chi tiết danh mục cha theo slug và bao gồm các danh mục con
        $detailCategory = Category::with('children')
            ->where('slug', $slug)->first();

        return view('admin.contents.categories.detailCategory')
            ->with('detailCategory', $detailCategory);
    }

    public function updateCategory(Request $req)
    {
        // Xác thực dữ liệu
        $validatedData = $req->validate([
            'name' => 'required|string|max:150',
        ], [
            'name.required' => 'Bạn cần nhập tên danh mục.',
            'name.string' => 'Tên danh mục phải là chuỗi ký tự.',
            'name.max' => 'Tên danh mục không được vượt quá 150 ký tự.',
        ]);

        // Tìm danh mục theo slug
        $category = Category::where('slug', $req->slug)->first();

        if ($category) {

            // Kiểm tra nếu 'name' thay đổi
            if ($category->name !== $validatedData['name']) {
                $category->name = $validatedData['name'];
                $category->slug = Str::slug($validatedData['name']); // Tạo slug mới khi tên thay đổi
            }
            // Lưu thay đổi
            $category->save();

            // Chuyển hướng
            return redirect()->route('admin.categories.detailCategory', ['slug' => $category->slug])
                ->with('message', 'Cập nhật danh mục thành công');
        }
    }

    public function updateSubCategory(Request $req)
    {
        // Xác thực dữ liệu
        $validatedData = $req->validate([
            'name' => 'required|string|max:150',
        ], [
            'name.required' => 'Bạn cần nhập tên danh mục.',
            'name.string' => 'Tên danh mục phải là chuỗi ký tự.',
            'name.max' => 'Tên danh mục không được vượt quá 150 ký tự.',
        ]);

        // Tìm danh mục theo slug
        $category = Category::where('slug', $req->slug)->first();

        $randomNumber = rand(1000, 9999);
        // $slug = Str::slug($req->name . '-' . $randomNumber);
        if ($category) {
            // $oldSlug = $category->slug; // Lưu slug cũ trước khi cập nhật

            // Kiểm tra nếu 'name' thay đổi
            if ($category->name !== $validatedData['name']) {
                $category->name = $validatedData['name'];
                // $category->slug = Str::slug($validatedData['name']); // Tạo slug mới khi tên thay đổi
                $category->slug = Str::slug($validatedData['name'] . '-' . $randomNumber);; // Tạo slug mới khi tên thay đổi

            }
            // Lưu thay đổi
            $category->save();
        }
        return back()->with('message', 'Cập nhật danh mục thành công');
    }

    public function addSubCategory(Request $req)
    {
        // Xác thực dữ liệu
        $validatedData = $req->validate([
            'name' => 'required|string|max:150',
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',
            'name.string' => 'Tên danh mục phải là chuỗi ký tự.',
            'name.max' => 'Tên danh mục con không được vượt quá 150 ký tự.',
        ]);

        // Kiểm tra tên danh mục con trùng với parent_id
        $existingCategoryByName = Category::where('parent_id', $req->parent_id)
            ->where('name', $req->name)
            ->first();

        if ($existingCategoryByName) {
            return back()->withErrors(['name' => 'Tên danh mục con đã tồn tại trong danh mục cha.'])->withInput();
        }

        // Tạo slug ban đầu
        $randomNumber = rand(1000, 9999);
        $slug = Str::slug($req->name . '-' . $randomNumber);

        // Kiểm tra và tạo lại slug nếu trùng lặp
        while (Category::where('slug', $slug)->exists()) {
            $randomNumber = rand(1000, 9999);
            $slug = Str::slug($req->name . '-' . $randomNumber);
        }

        // Tạo mới danh mục con
        $category = new Category();
        $category->parent_id = $req->parent_id;
        $category->name = $req->name;
        $category->slug = $slug;

        // Lưu danh mục
        $category->save();

        // Trả về thông báo thành công
        return back()->with('message', 'Thêm Danh Mục Con Thành Công');
    }
    public function addCategory(Request $req)
    {
        // Xác thực dữ liệu
        $validatedData = $req->validate([
            'name' => 'required|string|max:150',  // Kiểm tra tên danh mục con
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',
            'name.max' => 'Tên danh mục không được vượt quá 150 ký tự.',
        ]);

        // Kiểm tra xem danh mục đã tồn tại chưa
        $existingCategory = Category::where('name', $req->name)->first();

        if ($existingCategory) {
            // Nếu danh mục đã tồn tại, trả về lỗi
            return back()->withErrors(['name' => 'Danh mục này đã tồn tại.'])->withInput();
        }

        // Tạo mới danh mục
        $category = new Category();
        $category->name = $req->name;            // Lưu tên danh mục
        $category->slug = Str::slug($req->name); // Tạo slug từ tên danh mục

        // Lưu danh mục
        $category->save();

        // Trả về thông báo thành công
        return back()->with('message', 'Thêm Danh Mục Thành Công');
    }
}
