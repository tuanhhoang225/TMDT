<?php

namespace common\models;

use Yii;
use common\models\base;
use yii\web\UploadedFile;

class Setting extends base\Setting
{/**
 * @var UploadedFile[]
 */
    public $photos;

    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), [[['photos'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 8]]);
    }

    /**
     * @return array|bool|string
     */
    public function upload()
    {
        if ($this->validate()) {
            $name = null;
            foreach ($this->photos as $image) {
                $temp = '/uploads/setting/' . $image->baseName . time() . '.' . $image->extension;

                if ($image->saveAs('../..' . $temp, false)) {
                    $name[] = $temp;
                }
            }

            return $name;
        } else {
            return false;
        }
    }
}
