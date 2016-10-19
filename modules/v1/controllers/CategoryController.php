<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;

/**
 * Category Controller
 *
 * @author Marcio Nido <marcionido@gmail.com>
 */
class CategoryController extends ActiveController 
{
    public $modelClass = 'app\modules\v1\models\Category';
    
    public function behaviors() {
        
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class'=> HttpBasicAuth::className(),
        ];
        
        return $behaviors;
        
        
    }
    
}
