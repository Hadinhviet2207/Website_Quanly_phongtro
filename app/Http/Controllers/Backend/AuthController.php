<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct(){
        // Any initialization can be done here
    }

    public function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }
        return view("Backend.auth.layoutlogin");
    }

    public function login(AuthRequest $request){
        $credentials = [
            'numberphone' => $request->input('numberphone'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công!');
        }
        return redirect()->route('auth.admin')->with('error', 'Số điện thoại hoặc mật khẩu không chính xác!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.admin')->with('success','Bạn đã đăng xuất thành công!');
    }

    public function register(AuthRequest $request){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'numberphone' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:6',
            'cfpassword' => 'required|string|same:password',
        ]);

        // Create a new user in the database
        $user = User::create([
            'name' => $validatedData['name'],
            'numberphone' => $validatedData['numberphone'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Optionally, you can authenticate the user immediately after registration
        Auth::login($user);

        // Redirect to the dashboard or any other route after successful registration
        return redirect()->route('auth.admin')->with('success', 'Đăng ký tài khoản thành công!');
    }
}
