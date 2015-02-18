<?php
use \FunctionalTester;

class WelcomeControllerCest
{
    public function _before(FunctionalTester $I)
    {
        Artisan::call('migrate:rollback');
        Artisan::call('migrate');
        Artisan::call('db:seed');
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
    public function testRegistrarPage(FunctionalTester $I){
        $I->wantTo('ensure that Registrar page works');
        $I->amOnPage('/registrar');
        $I->seeResponseCodeIs('200');

    }
   /* public function testRegistrationCorrectly(FunctionalTester $I)
    {
        $I->wantTo('ensure that I can registrar with correct information');
        $I->amOnPage('/registrar');
        $I->fillField('first_name', 'Alamin');
        $I->fillField('last_name', 'Almatrudi');
        $I->fillField('username', 'uniqeUserName');
        $I->fillField('email', 'me@hotmail.com');
        $I->fillField('password', 'passworD365');
        $I->fillField('password_confirm', 'passworD365');
        $I->click('Register');
        $I->seeResponseCodeIs('200');

    }*/
}