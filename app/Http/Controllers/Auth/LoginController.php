<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Authenticatable;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function getLoginView(Request $request)
    {
        if (Auth::guest()) return view('auth.login');
        else return redirect()->intended($request->get('redirect-to'));
    }

    public function login(Request $request)
    {

      // dd($request->input());

        $data = $request->input();
        if (User::where(['email' => $data['email']])->first()) {
          $currentUser = User::where(['email' => $data['email']])->first();
          // c  dd($currentUser);
          if (Hash::check($data['password'], $currentUser->password))
          {
            return redirect('/dashboard');

          }
          else {
          return redirect()->back()->with('flash_message_error', 'Votre mot de passe invalide');
        }

        }
      else {
        return redirect()->back()->with('flash_message_error', 'Email invalide! Veuillez réessayer');
      }

    return view('Auth.login');
    }

    public function checkCredentials(Request $request)
    {
        // dd($request);

        $tempUser = User::where('email', $request->email)->get()->first();

        // dd($tempUser->password);

        if ($tempUser && Hash::check($request->password, $tempUser->password)) Auth::login($tempUser, $request->get('remember_me') == 'on');

        // dd(Auth::check());

        if (Auth::check()) {
        //    return json_encode(['status' => true, 'url' => route('/dashboard'), 'lastname' => $tempUser->last_name,'firstname' => $tempUser->first_name,]);
        // return redirect('/admin/dashboard');
        return redirect()->route('dashboard');
    }

    return view('auth.login');
    }

    public function credentials(Request $request){
        return ['email'=>$request->email,'password'=>$request->password,'type_users'=>'Admin'];
    }

    public function destroyAccess(Request $request)
    {

      Auth::logout();
      return redirect(route('Auth.login', ['redirect-to=' . $request->get('redirect-to')]));
    }


}

