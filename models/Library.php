<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property int $id 书籍编号
 * @property string $title 书籍名称
 * @property string $author 作者
 * @property string $decs 书籍简介
 * @property int $status 借阅状态：1-借出 2-未借出
 * @property int $inventory 库存
 * @property string $borrowMan 借阅人
 * @property string $borrowTime 借阅时间
 * @property string $category 书籍分类
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title'], 'required'],
            [['id', 'inventory'], 'integer'],
            [['borrowTime'], 'safe'],
            [['title', 'author', 'borrowMan', 'category'], 'string', 'max' => 50],
            [['decs'], 'string', 'max' => 500],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '书籍编号',
            'title' => '书籍名称',
            'author' => '作者',
            'decs' => '书籍推荐',
            'status' => '借阅状态',
            'inventory' => '库存',
            'borrowMan' => '借阅人',
            'borrowTime' => '借阅时间',
            'category' => '书籍分类',
        ];
    }
}
