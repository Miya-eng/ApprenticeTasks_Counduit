<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request) {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return redirect()->route('home')->with('success', 'ログイン成功！');
        } else {
            return redirect()->back();
        }
    }

    public function register(Request $request) {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login')->with('success', 'ログイン成功！');

    }

    public function profile(string $id) {
        $user = User::findOrfail($id);
        $articles = $user->articles()->latest()->paginate(5);
        return view('profile', compact('user', 'articles'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home')->with('success', 'ログアウト成功！');
    }
}
