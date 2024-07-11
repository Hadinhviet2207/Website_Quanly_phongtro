<?php
namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FacebookController extends Controller
{
    public function facebookpage()
    {
        return Socialite::driver("facebook")->redirect();
    }
    public function facebookredirect()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $user = User::where('facebook_id', $facebookUser->id)->first();

            if($user) {
                $user->update([
                    'facebook_id' => $facebookUser->id,
                ]);
            } else {
                $user = User::create([
                    'name' => $facebookUser->name,
                    'facebook_id' => $facebookUser->id,
                    'email'=> $facebookUser->email,
                    'avatar'=> $facebookUser->getAvatar(),
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
