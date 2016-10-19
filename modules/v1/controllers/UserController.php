<?php

namespace app\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\User;

/**
 * User Controller
 * API Authentication 
 *
 * @author Marcio Nido <marcionido@gmail.com>
 */
class UserController extends ActiveController 
{
    public $modelClass = 'app\modules\v1\models\User';

    public function actionAuthenticate() 
    {
        
        $post = Yii::$app->request->post();
        if (! isset($post['username']) || ! isset($post['password'])) {
            throw new \yii\web\ForbiddenHttpException();
        }
        
        $user = User::findOne(['username'=>$post['username']]);
        if ($user == null) {
            throw new \yii\web\ForbiddenHttpException();
        }
        
        if (! $user->validatePassword($post['password'])) {
            throw new \yii\web\ForbiddenHttpException();
        }
        
        return base64_encode($user->access_token.':');
        
    }
    
    
}
