<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Company;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //Valida os campos que estão vindo do formulário
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Validação do e-mail
        $user = User::where('email', '=', $request->email)->first();
        //Se houver usuário
        if($user) {
            //Se esse usuário que existe, tiver a mesma senha que foi digitada no formulário
            if($user->password === $request->password) {
                $request->session()->regenerate();
                //Retorna a listagem de empresas
                return redirect()->action([CompanyController::class, 'index']);

            }
        }
        // Se não for retornado nada antes disso retorne a tela de login, pois é sinal de que esse usuário não existe.
        return view('login');
    }
}

