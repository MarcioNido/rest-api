<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Category Controller
 *
 * @author Marcio Nido <marcionido@gmail.com>
 */
class EventController extends ActiveController 
{
    public $modelClass = 'app\modules\v1\models\Event';
    
    public function behaviors() {
        
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class'=> HttpBasicAuth::className(),
        ];
        
        return $behaviors;
        
        
    }    
}
