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

   /* public function testLogin(AcceptanceTester $I){
        $I->wantTo('ensure that logs in works and direct me to main page');
        $I->amOnPage('/login');
        $I->fillField('username','almatrudia');
        $I->fillField('password','password');
        $I->click('Submit');
        $I->see('You logged in to main page');

    }*/

}