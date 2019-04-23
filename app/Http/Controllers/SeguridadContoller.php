<?php

namespace App\Http\Controllers;

use App\Mail\EmergencyCallReceived;
use Illuminate\Http\Request;

use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;

class SeguridadContoller extends Controller
{

    function email(){
        \Mail::to('ricardo.berrospi@tecsup.edu.pe')->send(new EmergencyCallReceived());
        return "Tú email ha sido enviado correctamente";
    }

    function login()
    {
        return View('seguridad.login');
    }

    function reg(Request $request){
        $user = $request->input('name');
        $clientIP = \Request::ip();
        
        \Log::info("Log: $user\r\n".$clientIP);

        $datos = [
            'user' => $user,
            'ip' => $clientIP
        ];

        return view('seguridad.reg', $datos);
    }


    function showLogin()
    {
        return View('seguridad.login2');
    }

    function doLogin(Request $request)
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            if(Auth::attempt($userdata, Input::get('remember-me', 0))){
                $email = $request->input('email');
                $data = [
                    'email' => $email
                ];
                return view('seguridad.codigo', $data);

            } 

            return Redirect::to('login')
                    ->with('loginError', 'Tus datos son incorrectos')
                    ->withInput();  

        }
    }

    function codigo(Request $request){
        $email = $request->input('email');

        \Mail::to($email)->send(new EmergencyCallReceived());
        $data = [
            'email' => $email
        ];
        return view('seguridad.codigo', $data);
    }

    function codigover(Request $request){

        $user = $request->input('email');
        $codigo = $request->input('codigo');

        if( $codigo == "1234" ){

            $clientIP = \Request::ip();
            $datos = [
                'user' => $user,
                'ip' => $clientIP
            ];

            return view('seguridad.reg', $datos);
        }

        $datos = [
            'user' => $user
        ];

        return view('seguridad.codigo');
        
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}