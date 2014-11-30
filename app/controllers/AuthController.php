<?php

	class AuthController extends BaseController {

		public function postLogin()
		{

				//GENERAMOS LAS REGLAS DE VALIDACIÓN PARA EL LOGIN
				$validator = Validator::make(Input::all(),array(
				'email' => 'required|email',
				'password' => 'required'
				)
				);
				//VERIFICAMOS QUE FALLE O NO LA VALIDACIÓN DE LAS REGLAS
				if($validator->fails()){
				//redirigimos al usuario al log in
				return Redirect::route('/')
				->withErrors($validator)
				->withInput();
				}else{
				$remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				
				), $remember);
				if($auth){
				return Redirect::intended('adminpanel');
				}else{
				return Redirect::route('home')
				->with('message-alert', 'El email o la contraseña no coinciden, o la cuenta no esta activada');
				}
				}
				return Redirect::route('login')
				->with('message-alert', 'Hubo un problema en el inicio de sesión ');
		}

		public function logout()
		{
			Auth::logout();

			return Redirect::to('/')->with('message','Session closed');
		}
	}