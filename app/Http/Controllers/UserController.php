<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req)
    {
        # search for user via email
        $user = User::where(['email' => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return 'Invalid credentials';
        } else {
            $req->session()->put("user", $user);
            return redirect('/');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->forget('user');
        return redirect('/');
    }

    public function orders()
    {
        return view('pages.orders');
    }

    public function makeOrder(Request $req)
    {
        return $req->input();
    }
}
