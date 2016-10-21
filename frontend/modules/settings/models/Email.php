<?php

namespace frontend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "email".
 *
 * @property integer $id
 * @property string $receiver_name
 * @property string $receiver_email
 * @property string $subject
 * @property string $content
 * @property string $attachment
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiver_name', 'receiver_email', 'subject', 'content', 'attachment'], 'required'],
            [['content'], 'string'],
            [['receiver_name', 'receiver_email'], 'string', 'max' => 100],
            [['subject', 'attachment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receiver_name' => 'Receiver Name',
            'receiver_email' => 'Receiver Email',
            'subject' => 'Subject',
            'content' => 'Content',
            'attachment' => 'Attachment',
        ];
    }
}