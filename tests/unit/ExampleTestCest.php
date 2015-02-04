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

    // tests
    public function tryToTest(UnitTester $I)
    {
        // ignored
    }

   /* public function testRegistrar(UnitTester $I){
        $I->wantTo('unit test the registrar page');

        $user = new User();
        $user->setFirstName(null) ;
        $I->assertFalse($user->validate(['username']));
    }*/
}