<?php

namespace common\models;

use Yii;
use common\models\base;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $title
 * @property int $location_image_id
 *
 * @property LocationImage $locationImage
 */
class Image extends base\Image
{
    public $images;

    /**
     * @return array
     */
    public function rules()
    {
        return array_merge(parent::rules(), [[['images'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 6]]);
    }
    /**
     * @return array|bool
     */
    public function upload()
    {
        if ($this->validate()) {
            $name = [];
            foreach ($this->images as $image) {
                $temp = '/uploads/image/' . $image->baseName . time() . '.' . $image->extension;

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
