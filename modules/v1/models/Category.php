<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "cal_category".
 *
 * @property integer $category_id
 * @property string $name
 * @property integer $active
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cal_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'name' => 'Name',
            'active' => 'Active',
        ];
    }
    
    
}
