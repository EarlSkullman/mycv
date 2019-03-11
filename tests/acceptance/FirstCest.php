<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Léo');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
