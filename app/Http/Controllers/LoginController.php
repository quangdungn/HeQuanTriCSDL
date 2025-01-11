<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('home.login'); // Giao diện form đăng nhập
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Xác thực người dùng
        if (Auth::attempt($request->only('email', 'password'))) {
            // Đăng nhập thành công
            return redirect()->intended('/Trang-chu'); // Chuyển hướng đến dashboard
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng.',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
