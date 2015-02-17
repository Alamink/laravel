<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public $timestamps = false; // I had to add this
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/*
	 * my work based on the example
	 */


	protected $fillable = array('first_name','last_name','username','password',
	'email');

	public static $rules = array(
		'first_name'             => 'required',
		'last_name'             => 'required',
		'username'             => 'required|min:6|unique:users',
		'email'            => 'required|email|unique:users',
		'password'         => 'required|min:5|max:30|has:upper,lower,num',
		'password_confirm' => 'required|same:password'
	);

public static $messages = array('password.has'    => 'The password must have lower and upper letter and number.');

	public static function getValidator($input){

		Validator::extend('has', function($attr, $value, $params) {

			if (!count($params)) {
				throw new \InvalidArgumentException('The has validation rule expects at least one parameter, 0 given.');
			}

			foreach ($params as $param) {
				switch ($param) {
					case 'num':
						$regex = '/\pN/';
						break;
					case 'letter':
						$regex = '/\pL/';
						break;
					case 'lower':
						$regex = '/\p{Ll}/';
						break;
					case 'upper':
						$regex = '/\p{Lu}/';
						break;
					case 'special':
						$regex = '/[\pP\pS]/';
						break;
					default:
						$regex = $param;
				}

				if (! preg_match($regex, $value)) {
					return false;
				}
			}

			return true;
		});

		$validator = Validator::make($input, User::$rules,User::$messages);

		return $validator;
	}

}
