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

    public function TestValidator(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing password');
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email'  =>  'required'
        );
        $validator = Validator::make(array("username"=>"almatrudia",'email'=> 'someEmail', 'password' => 'password'),$rules );
        $I->assertFalse($validator->fails());

    }
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

    }


}