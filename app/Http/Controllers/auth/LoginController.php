<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $guardName = 'admin';
    protected $loginRoute;

    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('postLogout');
    //     $this->loginRoute = route('login');
    // }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogout()
    {
        // Auth::guard($this->guardName)->logout();
        // Session::invalidate();
        // Session::regenerateToken();
        // return redirect()->guest($this->loginRoute);
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }

        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];


        if (Auth::guard($this->guardName)->attempt($credential)) {

            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended('admin/dashboard');
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(["Informations de connexion incorrectes!"]);
        }
    }

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users      =   User::where(['email' => $userSocial->getEmail()])->first();
        // dd($users);
        if($users){
            Auth::login($users);
            return redirect('/')->with('success','You are login from '.$provider);
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
         return redirect()->route('home');
        }
    }
}
