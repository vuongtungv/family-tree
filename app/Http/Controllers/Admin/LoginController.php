<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


// khai báo sử dụng loginRequest
use App\Http\Requests\Admin\LoginRequest;
use Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{

    public function getLogin()
    {

        if (Auth::check()) {
            // nếu đăng nhập thàng công thì
            return Redirect::route('home');
        } else {
            return view('admin.login');
        }

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
//        dd($request->all());
//        dd(Hash::make('admin'));
        $login = [
            'username' => $request->username,
            'password' => $request->password,
//            'level' => 1,
//            'status' => 1
        ];
//        dd(Auth::attempt($login));
        if (Auth::attempt($login)) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->back()->with('status', 'Username hoặc Password không chính xác');
        }
    }

    /**
     * action admin/logout
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin_login');
    }
}
