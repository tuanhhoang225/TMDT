<?php

namespace common\models;

use common\models\base;
use yii\web\UploadedFile;

class Product extends base\Product
{
    /**
     * @var UploadedFile[]
     */
    public $images;

    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), [[['images'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4]]);
    }

    /**
     * @return array|bool
     */
    public function upload()
    {
        if ($this->validate()) {
            $name = [];
            foreach ($this->images as $image) {
                $temp = '/uploads/product/' . $image->baseName . time() . '.' . $image->extension;

                if ($image->saveAs('../..' . $temp, false)) {
                    $name = $temp;
                }

            }

            return $name;
        } else {
            return false;
        }
    }
}
