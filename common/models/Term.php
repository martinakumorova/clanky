<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "term".
 *
 * @property integer $id_term
 * @property string $date_time
 * @property integer $user_id_user
 * @property integer $ambulance_id_ambulance
 *
 * @property Ambulance $ambulanceIdAmbulance
 * @property User $userIdUser
 */
class Term extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'term';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time',  'ambulance_id_ambulance'], 'required'],
            [['date_time','user_id_user'], 'safe'],
            [['user_id_user', 'ambulance_id_ambulance'], 'integer'],
            [['ambulance_id_ambulance'], 'exist', 'skipOnError' => true, 'targetClass' => Ambulance::className(), 'targetAttribute' => ['ambulance_id_ambulance' => 'id_ambulance']],
            [['user_id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_term' => 'Id Term',
            'date_time' => 'Date Time',
            'user_id_user' => 'User Id User',
            'ambulance_id_ambulance' => 'Ambulance Id Ambulance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmbulanceIdAmbulance()
    {
        return $this->hasOne(Ambulance::className(), ['id_ambulance' => 'ambulance_id_ambulance']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id_user']);
    }
}
