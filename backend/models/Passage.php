<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "passage".
 *
 * @property integer $ID
 * @property string $title
 * @property string $date
 * @property integer $author_ID
 * @property string $author
 * @property string $content
 * @property string $status
 * @property integer $seen
 *
 * @property Comment[] $comments
 * @property Favorite[] $favorites
 * @property Match[] $matches
 * @property User $author0
 * @property PassageKey[] $passageKeys
 */
class Passage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'passage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'date', 'author_ID', 'author', 'content', 'seen'], 'required'],
            [['author_ID', 'seen'], 'integer'],
            [['content', 'status'], 'string'],
            [['title', 'date'], 'string', 'max' => 200],
            [['author'], 'string', 'max' => 255],
            [['author_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_ID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => '文章标号',
            'title' => '文章标题',
            'date' => '文章发布时间',
            'author_ID' => '文章发布者ID',
            'author' => '文章发布者',
            'content' => '文章内容',
            'status' => '文章状态',
            'seen' => '文章点击数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['passage_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorite::className(), ['passage_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(Match::className(), ['url' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassageKeys()
    {
        return $this->hasMany(PassageKey::className(), ['passage_ID' => 'ID']);
    }
}
