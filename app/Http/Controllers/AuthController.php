<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    // public function showLoginForm()
    // {
    //     return view('login');
    // } 
    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password không được để trống',
        ]);

        $credentials = $req->only('email', 'password');

        // Kiểm tra đăng nhập
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Lấy thông tin người dùng hiện tại

            if ($user->role == 11) {
                return redirect()->route('admin.dashboard'); // Đăng nhập thành công, chuyển hướng đến trang home
            } else {
                // Đăng nhập thất bại
                return redirect()->back();
            }
        } 
    }
    public function logout(Request $request)
    {
        Auth::logout();

        // Hủy toàn bộ session và tái tạo token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Điều hướng đến form đăng nhập với thông báo
        return redirect()->route('home');
    } 
}
