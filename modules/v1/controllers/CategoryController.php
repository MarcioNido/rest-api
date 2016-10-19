<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Category Controller
 *
 * @author Marcio Nido <marcionido@gmail.com>
 */
class CategoryController extends ActiveController 
{
    public $modelClass = 'app\modules\v1\models\Category';
}
