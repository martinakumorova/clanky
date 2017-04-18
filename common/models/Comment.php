<?php

namespace common\models;
use common\models\User;
use common\models\Post;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id_comment
 * @property string $comment
 * @property string $date
 * @property integer $post_id_post
 * @property integer $reply_id_coment
 * @property integer $id_user
 *
 * @property User $idUser
 * @property Comment $replyIdComent
 * @property Comment[] $comments
 * @property Post $postIdPost
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['comment', 'date', 'post_id_post', 'reply_id_coment', 'id_user'], 'required'],
            [['comment'], 'string'],
            [['date'], 'safe'],
            [['post_id_post', 'reply_id_coment', 'id_user'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['reply_id_coment'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['reply_id_coment' => 'id_comment']],
            [['post_id_post'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id_post' => 'id_post']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'comment' => 'Comment',
            'date' => 'Date',
            'post_id_post' => 'Post Id Post',
            'reply_id_coment' => 'Reply Id Coment',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReplyIdComent()
    {
        return $this->hasOne(Comment::className(), ['id_comment' => 'reply_id_coment']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['reply_id_coment' => 'id_comment']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostIdPost()
    {
        return $this->hasOne(Post::className(), ['id_post' => 'post_id_post']);
    }
}
