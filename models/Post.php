<?php

namespace app\models;

use app\models\Tag;
use Yii;

use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $title
 * @property string $excerpt
 * @property string $text
 * @property string|null $image
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Category $category
 */
class Post extends \yii\db\ActiveRecord
{
    public $data;
    public $tree;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['viewed'], 'integer', 'default', 'value' => 0],
            [['title', 'excerpt', 'text'], 'required'],
            [['text'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'excerpt', 'image'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'text' => 'Text',
            'image' => 'Image',
            'viewed' => 'Просмотры',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function getComment()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }

    public function getTag()
    {
        return $this->hasMany(Tag::class, ['id' => 'tag_id'])
            ->viaTable('posts_tags', ['post_id' => 'id']);
    }

    /**
     * Счетчик просмотров поста с записью id в сессию
     * данный подход исключает накрутку просмотров за сессию
     * @return bool
     */
    public function processCountViewPost()
    {
        $session = Yii::$app->session;
        // Если в сессии отсутствуют данные,
        // создаём, увеличиваем счетчик, и записываем в бд
        if (!isset($session['blog_post_view'])) {
            $session->set('blog_post_view', [$this->id]);
            $this->updateCounters(['viewed' => 1]);
            // Если в сессии уже есть данные то проверяем засчитывался ли данный пост
            // если нет то увеличиваем счетчик, записываем в бд и сохраняем в сессию просмотр этого поста
        } else {
            if (!ArrayHelper::isIn($this->id, $session['blog_post_view'])) {
                $array = $session['blog_post_view'];
                array_push($array, $this->id);
                $session->remove('blog_post_view');
                $session->set('blog_post_view', $array);
                $this->updateCounters(['viewed' => 1]);
            }
        }
        return true;
    }

}
