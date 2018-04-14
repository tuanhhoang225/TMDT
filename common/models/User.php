<?php
namespace common\models;

use common\models\base;

class User extends base\User
{
    const RULE_SENIOR = 'RULE_SENIOR';
    const RULE_ADMIN = 'RULE_ADMIN';
    const RULE_USER = 'RULE_USER';
}
