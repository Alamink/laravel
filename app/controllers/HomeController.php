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
			'username' => 'required',
			'password' => 'required',
			'email'  =>  'required'
		);

		$validator  = Validator::make(Input::all(),$rules);

			if($validator->fails()){// case failure
				return  Redirect::to('/login')->withErrors($validator)
					->withInput(Input::except('password'));

            }else {
				$userdata = array(
					'username' => Input::get('username'),
					'password' => Input::get('password'),
					'email'  => Input::get('email')
				);

				if (Auth::attempt($userdata)) {
					return View::make('mainPage');
				} else {
					return Redirect::Back()->withErrors(['Fail to Login', ''])->withInput(Input::except('password'));
				}

			}
	}

}
