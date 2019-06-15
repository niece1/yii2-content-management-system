<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "albums".
 *
 * @property int $id
 * @property string $title
 * @property string $image_main
 * @property string $image_01
 * @property string $image_02
 * @property string $image_03
 * @property string $image_04
 * @property string $image_05
 * @property string $image_06
 * @property string $image_07
 * @property string $image_08
 * @property string $image_09
 * @property string $image_10
 * @property string $image_11
 * @property string $image_12
 * @property string $image_13
 * @property string $image_14
 * @property string $image_15
 * @property string $image_16
 * @property string $image_17
 * @property string $image_18
 * @property string $image_19
 * @property string $image_20
 * @property string $image_21
 */
class Albums extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'albums';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['title'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image_main' => 'Image Main',
            'image_01' => 'Image 01',
            'image_02' => 'Image 02',
            'image_03' => 'Image 03',
            'image_04' => 'Image 04',
            'image_05' => 'Image 05',
            'image_06' => 'Image 06',
            'image_07' => 'Image 07',
            'image_08' => 'Image 08',
            'image_09' => 'Image 09',
            'image_10' => 'Image 10',
            'image_11' => 'Image 11',
            'image_12' => 'Image 12',
            'image_13' => 'Image 13',
            'image_14' => 'Image 14',
            'image_15' => 'Image 15',
            'image_16' => 'Image 16',
            'image_17' => 'Image 17',
            'image_18' => 'Image 18',
            'image_19' => 'Image 19',
            'image_20' => 'Image 20',
            'image_21' => 'Image 21',
        ];
    }
    public function saveImage($filename)
    {
        $this->image_main = $filename;
        return $this->save(false);
    }
    public function getImage()
    {
        return ($this->image_main) ? '/uploads/' . $this->image_main : '/no-image.png';
    }
}
