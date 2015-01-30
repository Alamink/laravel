<?php
/**
 * Created by PhpStorm.
 * User: almatrudia
 * Date: 1/30/2015
 * Time: 3:08 PM
 */

class WelcomeFunTests
{

    public function testMainPage(FunctionalTester $I)
    {

        $I->wantTo('ensure that main page works');
        $I->amOnPage('/login');
        $I->seeResponseCodeIs('200');
    }
/*
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

    }*/
}