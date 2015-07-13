<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category_id
 * @property string $description
 * @property string $text
 * @property integer $author_id
 * @property string $create_at
 * @property string $update_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'description', 'text', 'author_id'], 'required'],
            [['category_id', 'author_id'], 'integer'],
            [['description', 'text'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'description' => 'Description',
            'text' => 'Text',
            'author_id' => 'Author ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
