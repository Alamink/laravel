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


	public function login()	{
		// setup the reules
		$rules = array(
			'email' => 'required',
			'password' => 'required',
		);

		$validator  = Validator::make(Input::all(),$rules);

			if($validator->fails()){// case failure
				return  Redirect::to('/login')->withErrors($validator)
					->withInput(Input::except('password'));

            }else {

				$userdata = array(
					'email' => Input::get('email'),
					'password' => Input::get('password')
				);

				if (Auth::attempt($userdata)) {
					echo 'SUCCESS!';
				} else {
					echo 'Fail!';

//					return Redirect::to('/login');
				}

			}
	}

}
