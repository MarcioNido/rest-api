<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test the category API');
$I->sendGet('categories');
$I->seeResponseCodeIs(200);
$I->seeResponseContains('General');
$I->seeResponseContains('Test');
