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
        $I->wantTo('I want to test Validator When missing the min pass len');
        $user = array(
            'first_name' => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemail@me.com',
            'password'         => '1234',
            'password_confirm' => '1234'
        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function TestValidatorPasswordNum(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing num in pass');
        $user = array(
            'first_name' => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemail@me.com',
            'password'         => 'ABcdF',
            'password_confirm' => 'ABcdF'
        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function TestValidatorPasswordLower(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing lower in pass');
        $user = array(
            'first_name' => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemail@me.com',
            'password'         => 'ADFG4560',
            'password_confirm' => 'ADFG4560'
        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function TestValidatorPasswordUpper(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing upper in pass');
        $user = array(
            'first_name' => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemail@me.com',
            'password'         => 'asdf4560',
            'password_confirm' => 'asdf4560'
        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }


    public function TestValidatorMissingPassword(UnitTester $I)

    {
        $I->wantTo('I want to test Validator when missing first name');

        $user = array(
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemaml@me.com',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );

        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }

    public function TestValidatorMissingLastName(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing last name');
        $user = array(
            'first_name'             => 'my name',
            'username'             => 'username',
            'email'            => 'myemaml@me.com',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }

    public function TestValidatorMissingUserName(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When missing userName');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'email'            => 'myemaml@me.com',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function TestValidatorUserNameShort(UnitTester $I)

    {
        $I->wantTo('I want to test Validator When userName is short');
        $user = array(
            'first_name' => 'my name',
            'last_name' => 'my last name',
            'username' => 'Alam',
            'email' => 'myemaml@me.com',
            'password' => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());
    }

        public function TestValidatorUserNameExists(UnitTester $I)
    {
        $I->wantTo('I want to test Validator When userName is used');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username' =>           'almatrudia',
            'email'            => 'myemaml@me.com',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'

        );
        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function ToTestValidatorEmailFormat(UnitTester $I)
    {

        $I->wantTo('I want to test Validator When  email is not good format');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'myemaml',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'
        );

        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }
    public function ToTestValidatorEmailIsUsed(UnitTester $I)
    {

        $I->wantTo('I want to test Validator When  email is used');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'email'            => 'almatrudia@msoe.edu',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'
        );

        $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }

    public function ToTestValidatorMissingEmail(UnitTester $I)
    {

        $I->wantTo('I want to test Validator When missing email');
        $user = array(
            'first_name'             => 'my name',
            'last_name'             => 'my last name',
            'username'             => 'username',
            'password'         => 'NicePas12',
            'password_confirm' => 'NicePas12'
        );

         $validator = User::getValidator($user);
        $I->assertTrue($validator->fails());

    }

    public function TestValidatorPasses(UnitTester $I)

    {
        $I->wantTo('I want to test Validator Passes');
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

}
