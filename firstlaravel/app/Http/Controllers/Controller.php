<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function app()
{
    return view('profile');
}

public function app2()
{
    return view('settings');
}

public function logout()
{
    auth()->logout();
    return redirect()->route('login');
}
}

