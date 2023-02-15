<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function regis(Request $request)
    {
        //validate data mesuk atau tidak
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address' => 'required|max:255',
        ]);

        // $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Regist success! Wait admin to approve');
        return redirect('register');
    }


    public function login()
    {
        return view('login');
    }

    public function Auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //buat cek si user sudah login
        if (Auth::attempt($credentials)) {
            //cek status user sudah aktif atau belum != adalah kalo bukan sama dengan
            if (Auth::user()->status != 'active') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your Account is not active yet, please contact admin first!');
                return redirect('login');
            }
        }

        //cek apakah admin atau bukan
        $request->session()->regenerate();
        if (Auth::user()->roles_id == 1) {
            return redirect ('dashboard');
        }

        //cek apakah dia client atau bukan
        if(Auth::user()->roles_id == 2) {
            return redirect('profile');
        }

        //misal gagan login
        Session::flash('status', 'failed');
        Session::flash('message', 'invalid log in');
        return redirect('login');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');

    }
}
