<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view("admin.login");
    }

    public function login(Request $request): Redirector|Application|RedirectResponse
    {
        $data = $request->only(["login", "password"]);
        if (!auth()->attempt($data, true)) {
            return redirect(route("admin.login"))->withErrors([
                "login" => "Неправильные данные"
            ]);
        }
        return redirect(route("admin.news"));
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        Auth::logout();

        return redirect(route("index"));
    }
}
