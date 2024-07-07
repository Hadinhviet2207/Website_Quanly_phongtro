<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function __construct(){
        
    }
    public function index(){
        if(Auth::id() > 0){
            // return redirect()->route('dashboard.index');
        }
        return view("Backend.auth.login");
    }
    public function login(AuthRequest $request){
        $credentials = [
            'username'=> $request->input('name'),
            'password'=> $request->input('password') 

        ];
        if (Auth::attempt( $credentials)){
            return redirect()->route('dashboard.index')->with('success','Đăng nhập thành công!');
        }
        return redirect()->route('auth.admin')->with('error','Email hoặc mật khẩu không chính xác!');
    }
    public function logout(AuthRequest $request){
    
    if(Auth::logout()){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.admin')->with( 'success','hehe');
    };
    echo 1; die;

    }
    public function signin(AuthRequest $request){
        echo 1;die();
    }

}