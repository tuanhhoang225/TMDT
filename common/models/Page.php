<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $title
 * @property string $describe
 * @property string $key
 * @property int $released
 *
 * @property Category[] $categories
 */
class Page extends \common\models\base\Page
{

}
