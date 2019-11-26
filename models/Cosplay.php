<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cosplay".
 *
 * @property int $id
 * @property string $name
 * @property string $country
 * @property string $photo
 * @property string $email
 * @property string $facebook_link
 * @property string $facebook_like
 * @property string $instagram_link
 * @property string $instagram_like
 * @property string $patreon_link
 * @property string $patreon_patron
 * @property string $created_at
 * @property string $updated_at
 * @property int $is_delete
 */
class Cosplay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cosplay';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['is_delete'], 'integer'],
            [['name', 'country', 'photo', 'facebook_link', 'facebook_like', 'instagram_like', 'patreon_patron'], 'string', 'max' => 100],
            [['email', 'instagram_link', 'patreon_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country' => 'Country',
            'photo' => 'Photo',
            'email' => 'Email',
            'facebook_link' => 'Facebook Link',
            'facebook_like' => 'Facebook Like',
            'instagram_link' => 'Instagram Link',
            'instagram_like' => 'Instagram Like',
            'patreon_link' => 'Patreon Link',
            'patreon_patron' => 'Patreon Patron',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_delete' => 'Is Delete',
        ];
    }
}
