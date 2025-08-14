<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;

class AutenticacionController extends Controller
{
    //
    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required|email|unique:usuario',
            'clave' => 'required|min:8'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'correo.required' => 'El campo correo es obligatorio.',
            'correo.email' => 'Ingrese un correo válido..',
            'correo.unique' => 'El correo ya esta registrado.',
            'clave.required' => 'La clave es obligatoria.',
            'clave.min' => 'La clave debe tener al menos 8 caracteres.'
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'clave' => bcrypt($request->input('clave'))
        ]);

        return redirect('/login')->with('mensaje', 'Usuario registrado correctamente.');
        //$token = JWTAuth::fromUser($usuario);
        //return response()->json(['usuario' => $usuario, 'token' => $token], 201);
    }

    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'clave' => 'required|min:8'
        ], [
            'correo.required' => 'Debe ingresar su correo.',
            'correo.email' => 'Debe ingresar un correo válido.',
            'clave.required' => 'Debe ingresar su contraseña.',
            'clave.min' => 'La contraseña debe tener al menos 8 caracteres.'
        ]);

        $credenciales = $request->only('correo', 'clave');

        if (! $token = JWTAuth::attempt([
            'correo' => $credenciales['correo'],
            'password' => $credenciales['clave']
        ])) {
            return redirect('/login')->with('error', 'Credenciales inválidas.');
            //return response()->json(['error' => 'Credenciales inválidas'], 401);
        }
        session(['jwt_token' => $token]);
        return redirect('/');
        //return redirect('/');
        //return response()->json(['token' => $token]);
    }

    public function mostrarFormularioRegistro()
    {
        return view('registro');
    }

    public function mostrarFormularioLogin()
    {
        return view('login');
    }

    /* public function perfil()
    {
        return response()->json(auth()->usuario());
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'Sesion cerrada']);
    } */
}
