<?php
namespace common\models;

use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $id;
    public $username;
    public $full_name;
    public $email;
    public $avatar;
    public $permission;
    public $address;
    public $password;
    public $status;
    public $re_password;
    public $phone;
    public $province_id;
    public $district_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\base\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'unique', 'targetClass' => '\common\models\base\User', 'message' => 'This username has already been taken.'],
            ['email', 'string', 'min' => 2, 'max' => 255],

            [['full_name', 'avatar', 'email'], 'trim'],
            ['full_name', 'required'],
            [['full_name', 'avatar', 'email'], 'string'],
            [['full_name', 'avatar', 'email'], 'string', 'max' => 255],

            [['permission', 'address','phone','avatar'], 'string'],

            [['province_id', 'district_id'], 'integer'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['re_password', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    /**
     * @param $id
     * @return bool|null
     */
    public function update($id)
    {
        $user = User::findOne($id);

        if (!$this->validate() && $this->username != $user->username) {
            return null;
        }

        $user->email = $this->email;
        $user->username = $this->username;
        $user['full_name'] = $this->full_name;
        $user['avatar'] = $this->avatar;
        $user['permission'] = $this->permission;
        $user['phone'] = $this->phone;
        $user['address'] = $this->address;
        $user['province_id'] = $this->province_id;
        $user['district_id'] = $this->district_id;

        return $user->save();
    }

    /**
     * @return User|null
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = $this->status;
        $user['full_name'] = $this->full_name;
        $user['avatar'] = $this->avatar;
        $user['permission'] = $this->permission;
        $user['phone'] = $this->phone;
        $user['address'] = $this->address;
        $user['province_id'] = $this->province_id;
        $user['district_id'] = $this->district_id;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
