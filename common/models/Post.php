<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use common\models\base;

class Post extends base\Post
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

        return array_merge(parent::rules(), [[['images'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4]]);
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->validate()) {
            $name = [];
            foreach ($this->images as $image) {
                $temp = '/uploads/post/' . $image->baseName . time() . '.' . $image->extension;

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
