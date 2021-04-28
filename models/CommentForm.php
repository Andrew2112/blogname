<?php


namespace app\models;


use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $comment;
    public $parent_id;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['parent_id'], 'integer'],
            [['comment'], 'string', 'length' => [3, 255]],
        ];
    }

    public function saveComment($post_id)
    {
        $comment = new Comment;
        $comment->text = htmlspecialchars($this->comment);
        $comment->user_id = Yii::$app->user->id;
        $comment->post_id = $post_id;
        $comment->status = 0;
        $comment->parent_id = $this->parent_id;

        return $comment->save();
    }

}