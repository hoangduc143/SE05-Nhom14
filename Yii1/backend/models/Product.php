<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $productname
 * @property string $description
 * @property string $direction
 * @property int $created_at
 * @property int $created_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productname', 'description', 'direction', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'integer'],
            [['productname', 'description', 'direction', 'created_by'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['productname'], 'unique'],
            [['direction'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productname' => 'Product Name',
            'description' => 'Description',
            'direction' => 'Direction',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'file'=>'File',
        ];
    }
}
