<?php

namespace common\models;
use common\models\User;
use common\models\Comment;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id_post
 * @property string $title
 * @property string $text
 * @property string $date
 * @property integer $id_user
 *
 * @property Comment[] $comments
 * @property User $idUser
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
            [['title', 'text', 'date', 'id_user'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['id_user'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'title' => 'Title',
            'text' => 'Text',
            'date' => 'Date',
            'id_user' => 'Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['post_id_post' => 'id_post']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
