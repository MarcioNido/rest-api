<?php
/**
 * Fixture data for user table 
 */
return [
    'ADMIN' => [
        'name'          =>'ADMIN',
        'username'      =>'ADMIN',
        'password'      =>Yii::$app->getSecurity()->generatePasswordHash('ADMIN'),
        'active'        =>1,
        'access_token'  =>Yii::$app->getSecurity()->generateRandomString(),
        'auth_key'      =>Yii::$app->getSecurity()->generateRandomString(),
    ],
    'DEMO' => [
        'name'          =>'DEMO',
        'username'      =>'DEMO',
        'password'      =>Yii::$app->getSecurity()->generatePasswordHash('DEMO'),
        'active'        =>1,
        'access_token'  =>Yii::$app->getSecurity()->generateRandomString(),
        'auth_key'      =>Yii::$app->getSecurity()->generateRandomString(),
    ],
    'BUDDY' => [
        'name'          =>'BUDDY',
        'username'      =>'BUDDY',
        'password'      =>Yii::$app->getSecurity()->generatePasswordHash('BUDDY'),
        'active'        =>1,
        'access_token'  =>Yii::$app->getSecurity()->generateRandomString(),
        'auth_key'      =>Yii::$app->getSecurity()->generateRandomString(),
    ],
    
    
];