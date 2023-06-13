<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validar el usuario
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Si falla mandar un error hacia el login.js
        abort_if(!auth()->attempt($request->only('email', 'password'), $request->remember), 404, 'Credenciales incorrectas');

        return response()->noContent();

    }
}
