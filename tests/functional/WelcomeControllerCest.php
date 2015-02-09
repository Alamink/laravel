<?php
use \FunctionalTester;

class WelcomeControllerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->wantTo('ensure that main page works');
        $I->amOnPage('/login');
        $I->seeResponseCodeIs('200');
    }

    public function testAboutPage(FunctionalTester $I){
        $I->wantTo('ensure that about page works');
        $I->amOnPage('/about');
        $I->seeResponseCodeIs('200');
    }

    public function testLogin(FunctionalTester $I){
        $I->wantTo('ensure that logs in works and direct me to main page');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
        $I->fillField('password','password');
        $I->click('Submit');
        $I->seeResponseCodeIs('200');
        $I->seeCurrentUrlEquals('/login');
    }

    public function testFailToLogin(FunctionalTester $I){
        $I->wantTo('ensure that logs tell me I fail to Login');
        $I->amOnPage('/login');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->fillField('username','almatrudia');
        $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->seeCurrentUrlEquals('/login');
    }

    public function testFailToPassValidatorMissingUserName(FunctionalTester $I){
        $I->wantTo('ensure that logs warn me when missing username');
        $I->amOnPage('/login');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->seeResponseCodeIs('200');
        $I->seeCurrentUrlEquals('/login');
    }

    public function testFailToPassValidatorMissingEmail(FunctionalTester $I){
        $I->wantTo('ensure that logs warn me when missing username');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
        $I->fillField('password','wrongPassword');
        $I->click('Submit');
        $I->seeResponseCodeIs('200');
        $I->seeCurrentUrlEquals('/login');
    }
    public function testFailToPassValidatorMissingPassword(FunctionalTester $I){
        $I->wantTo('ensure that logs warn me when missing username');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
        $I->fillField('email','almatrudia@msoe.edu');
        $I->click('Submit');
        $I->seeResponseCodeIs('200');
        $I->seeCurrentUrlEquals('/login');
    }
}