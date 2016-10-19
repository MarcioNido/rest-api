<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test the category API');

// get the ADMIN token
$fixtures = $I->getFixtures();
$userFixtures = $fixtures['user'];
$adminToken = $userFixtures['ADMIN']['access_token'];

$I->amHttpAuthenticated($adminToken, '');
$I->sendGet('categories');
$I->seeResponseCodeIs(200);
$I->seeResponseContains('General');
$I->seeResponseContains('Test');
