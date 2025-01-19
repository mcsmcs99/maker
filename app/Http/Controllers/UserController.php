<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            // return $request->all();
            // Validação dos dados
            $rules = [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ];

            $request->validate($rules);

            // Se falhar a validação, retorna erro
            if ($request->input('password') !== $request->input('confirmPassword')) {
                return response()->json([
                    'errors' => 'As senhas não são iguais'
                ], 400);
            }

            // Criação do usuário com senha criptografada
            $user = User::create([
                'name'     => $request->input('name'),
                'email'    => $request->input('email'),
                'company'  => $request->input('company'),
                'segment_id'  => $request->input('segment_id'),
                'sub_segment_id'  => $request->input('sub_segment_id'),
                'password' => Hash::make($request->input('password')),
                'whatsapp' => $request->input('whatsapp'),
                'type' => $request->input('type')
            ]);

            // Retorno de sucesso
            return response()->json([
                'message' => 'Usuário registrado com sucesso!',
                'user'    => $user
            ], 200);

        } catch (\Exception $e) {

            return response()->json(['code' => 500, 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function user(Request $request)
    {
        return $request->user();
    }
}
