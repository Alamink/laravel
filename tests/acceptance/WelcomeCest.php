<?php
use \AcceptanceTester;

class WelcomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // main page
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('ensure that frontpage works');
        $I->amOnPage('/');
        $I->seeResponseCodeIs('200');

    }
    // logged in page

}