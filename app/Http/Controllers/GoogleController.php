<?php
namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->orWhere('email', $googleUser->email)->first();

            if($user) {
                $user->update([
                    'google_id' => $googleUser->id,
                ]);
            } else {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'avatar'=> $googleUser->getAvatar(),
                    'password' => bcrypt('12345678'), // Generate a random password
                ]);
            }

            Auth::login($user);
            return redirect()->route('dashboard.index')->with('success','Đăng nhập thành công!');

        } catch (\Exception $e) {
            return redirect('auth.admin')->with(['error' => $e->getMessage()]);
        }
    }
}



