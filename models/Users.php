<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $create_at
 * @property string $update_at
 * @property string $name
 * @property string $avatar
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email', 'name', 'avatar'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['login', 'password', 'email', 'name', 'avatar'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'name' => 'Name',
            'avatar' => 'Avatar',
        ];
    }
}
