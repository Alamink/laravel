<?php
use DebugBar\StandardDebugBar;

class HomeController extends BaseController {



	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function showRegistrar()
	{
		return View::make('/registrar');
	}

	public function register(){


		$validator = Validator::make(Input::all(), User::$rules);


		if($validator->fails()){
			$messages = $validator->messages();
			return Redirect::to('registrar')->withErrors($validator)
				->withInput(Input::except('password','password_confirm'));

		}else{

			$user = new User;
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));

			$user->save();
			echo "I saved you to Database";

		}

	}
	public function login()	{
		// setup the reules
		$rules = array(
			'username' => 'required',
			'password' => 'required',
		);

		$validator  = Validator::make(Input::all(),$rules);

			if($validator->fails()){// case failure
				return  Redirect::to('/login')->withErrors($validator)
					->withInput(Input::except('password'));

            }else {
				$userdata = array(
					'username' => Input::get('username'),
					'password' => Input::get('password')
				);


				if (Auth::attempt($userdata)) {
					return View::make('mainPage');
				} else {
					echo 'Fail!';
				}

			}
	}

}
