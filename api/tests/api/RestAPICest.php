<?php

class RestAPICest
{
    public function hello_test(ApiTester $I)
    {
        $I->wantTo('Test the hello REST API function');
        $I->sendGET('/hello');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains('Hello World');
    }

    public function you_test(ApiTester $I)
    {
        $I->wantTo('Test the hello REST API function with argument');
        $I->sendGET('/hello/you');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains('Hello you');
    }
}
