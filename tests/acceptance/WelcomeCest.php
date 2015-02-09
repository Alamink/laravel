<?php

class WelcomeCest
{
    //black box test
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // main page
    public function testMainPage(AcceptanceTester $I)
    {
        $I->wantTo('ensure that main page works');
        $I->amOnPage('/login');
        $I->see('Login with Alamin');

    }
    public function testAboutPage(AcceptanceTester $I){
        $I->wantTo('ensure that about page works');
        $I->amOnPage('/about');
        $I->see('Alamin almatrudi');
    }

    public function testLogin(AcceptanceTester $I){
        $I->wantTo('ensure that logs in works and direct me to main page');
        $I->amOnPage('/login');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->fillField('username','almatrudia');
        $I->fillField('password','password');
        $I->click('Submit');
        $I->see('You logged in to main page');

    }

    public function testFailToLogin(AcceptanceTester $I){
        $I->wantTo('ensure that logs tell me I fail to Login');
        $I->amOnPage('/login');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->fillField('username','almatrudia');
        $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->see('Fail to Login');

    }

    public function testFailToPassValidatorMissingUserName(AcceptanceTester $I){
        $I->wantTo('ensure that logs warn me when missing username');
        $I->amOnPage('/login');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->see('The username field is required');
    }

    public function testFailToPassValidatorMissingEmail(AcceptanceTester $I){
        $I->wantTo('ensure that logs warn me when missing Email');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
       $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->see('The email field is required');
    }
    public function testFailToPassValidatorMissingPassword(AcceptanceTester $I){
        $I->wantTo('ensure that logs warn me when missing passowrd');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->click('Submit');
        $I->see('The password field is required');
    }

}