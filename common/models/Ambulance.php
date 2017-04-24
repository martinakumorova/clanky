<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ambulance".
 *
 * @property integer $id_ambulance
 * @property string $name
 * @property string $doctor
 * @property string $info
 *
 * @property AmbulanceHasUser[] $ambulanceHasUsers
 * @property User[] $userIdUsers
 * @property Term[] $terms
 */
class Ambulance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ambulance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['info'], 'string'],
            [['name', 'doctor'], 'string', 'max' => 65],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ambulance' => 'Id Ambulance',
            'name' => 'Name',
            'doctor' => 'Doctor',
            'info' => 'Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmbulanceHasUsers()
    {
        return $this->hasMany(AmbulanceHasUser::className(), ['ambulance_id_ambulance' => 'id_ambulance']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIdUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id_user'])->viaTable('ambulance_has_user', ['ambulance_id_ambulance' => 'id_ambulance']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTerms()
    {
        return $this->hasMany(Term::className(), ['ambulance_id_ambulance' => 'id_ambulance']);
    }
}
