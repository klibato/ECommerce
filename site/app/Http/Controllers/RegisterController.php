<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function save(Request $request)

    {
        $validate = $request->validate([
            'name' => "min:2|max:20",
            'email' => "max:50",
            'password' => "min:8|max:30|confirmed",
        ]);

        $validate["password"] = Hash::make($request->password);

        User::create($validate);
        return redirect('login');
    }
}
