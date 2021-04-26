<?php


namespace app\controllers;

use app\models\Comment;
use app\models\CommentForm;
use app\models\Post;
use Yii;
use yii\data\Pagination;


class PostController extends AppController
{

    public function actionIndex()
    {

        $query = Post::find()->with('category')->orderBy('created_at DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $post = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $this->setMeta('Blogname', 'description', 'keywords');
        return $this->render('index', compact('post', 'pages'));
    }

    public function actionView($id)
    {
        $post = Post::find()->where(['id' => $id])->one();
        // $comments = $post->comment;
        $comments = Comment::find()->where(['post_id' => $id , 'status'=>1])->orderBy('created_at DESC')->limit(1)->all();
        $post->processCountViewPost();
        $commentForm = new CommentForm();

        if (empty($post)) throw new \yii\web\HttpException(404, 'Нет такой записи');
        $this->setMeta("Blogname | {$post->title}", 'description', 'keywords');


        return $this->render('view', compact('post', 'comments', 'commentForm', 'id'));
    }
//просмотр комментарие к статье в отдельном окне
    public function actionPostComments($id)
    {
        $post = Post::find()->where(['id' => $id])->one();
        $comments = $post->comment;

        return $this->render('post-comments', compact('comments', 'post'));
    }

    public function actionComment($id)
    {
        $model = new CommentForm();

        if (Yii::$app->request->isPjax) {
            $data = Yii::$app->request->post();
            if ($model->load($data)) {
                $model->saveComment($id);
                Yii::$app->session->setFlash('success', 'Your comment will be added soon!');
                return $this->redirect(['post/view', 'id' => $id]);


            }
        }

    }

    public function actionSearch()
    {
        $q = trim(\Yii::$app->request->get('q'));
        $this->setMeta(Yii::$app->name . " | Search: {$q}");
        if (!$q) {
            return $this->render('search');
        }
        $query = Post::find()->with('category')->where(['like', 'title', $q])->orderBy('created_at DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $post = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('search', compact('post', 'pages', 'q'));
    }
}