<?php
use \UnitTester;

class ExampleTestCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    public function TestValidatorPasswordMin(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When not meeting password requirements for registration');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemail@me.com',
            'password'         => '1234',
            'password_confirm' => '1234'

        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }

    public function TestValidatorPasswordMeet(UnitTester $I)

    {
          $I->wantTo('I want to test Validator When meeting password requirements for registration');
          $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemaml@me.com',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );

        $validator = User::getValidator($user);
        $I->assertFalse($validator->fails());

    }

     /*
    public function TestValidatorMissingPassword(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing password');
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email'  =>  'required'
        );
        $validator = Validator::make(array("username"=>"almatrudia",'email'=> 'someEmail' ),$rules );
        $I->assertTrue($validator->fails());

    }

    public function TestValidatorMissingUserName(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing a username');
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email'  =>  'required'
        );
        $validator = Validator::make(array("password"=>"pass",'email'=> 'someEmail' ),$rules );
        $I->assertTrue($validator->fails());

    }
    public function ToTestValidatorMissingEmail(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing email');
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email'  =>  'required'
        );
        $validator = Validator::make(array("password"=>"pass",'username'=> 'username' ),$rules );
        $I->assertTrue($validator->fails());

    }*/
}
