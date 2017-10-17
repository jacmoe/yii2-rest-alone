<?php 
$I = new ApiTester($scenario);
$I->wantTo('Test the REST API');
$I->sendGET('/hello');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('Hello World');
