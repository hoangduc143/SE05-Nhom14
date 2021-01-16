<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $productname
 * @property string $description
 * @property string $thumbnail
 * @property string $model
 * @property string $snipet
 * @property string $environment
 * @property string $embedcode
 * @property int $created_at
 * @property string $created_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $glbFile;
    public $thumbnail_image;
    public $hdrFile;
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
            [['productname', 'description', 'thumbnail', 'model', 'snipet', 'environment', 'embedcode', 'created_at', 'created_by'], 'required'],
            [['created_at'], 'integer'],
            [['productname', 'description', 'thumbnail', 'model', 'snipet', 'environment', 'embedcode', 'created_by'], 'string', 'max' => 255],
            [['productname'], 'unique'],
            [['glbFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'glb', 'maxFiles' => 1],
            [['thumbnail_image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 1],
            [['hdrFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'hdr', 'maxFiles' => 1],
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
            'thumbnail' => 'Thumbnail',
            'model' => 'Model',
            'snipet' => 'Snippet',
            'environment' => 'Environment',
            // 'embedcode' => 'Embedcode',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
