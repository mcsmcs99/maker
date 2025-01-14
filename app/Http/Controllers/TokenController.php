<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TokenController extends Controller
{
    public function getToken(Request $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);

            if (!$token = auth()->attempt($credentials)) {
                return response()->json([
                'data' => [
                    'code' => 401,
                    'message' => 'Login ou senha incorretos!'
                ]
            ]);
            }
        
            return response()->json([
                'data' => [
                    'code' => 200,
                    'token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => auth()->factory()->getTTL() * 60
                ]
            ]);

        } catch (\Exception $e) {

            // Outros erros não tratados
            return response()->json(['code' => 500, 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
