<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validacion
        $dataValidated = $request->validate( [
            'name' => 'required|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6', //* Verificar que sean iguales los password
        ]);

        User::create([...$dataValidated, 'password' => Hash::make($dataValidated['password'])]);

        auth()->attempt($request->only('email', 'password'));

        return response()->noContent();

    }

}
