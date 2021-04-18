<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m210413_110933_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'text'=>$this->text(),
            'user_id'=>$this->integer(),
            'post_id'=>$this->integer(),
            'status'=>$this->integer(),
            ]);
        $this->createIndex(
          'idx_post_user_id',
          'comments',
          'user_id'
        );

        $this->addForeignKey(
            'fk_post_user_id',
            'comments',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx_post_id',
            'comments',
            'post_id'
        );

        $this->addForeignKey(
            'fk_post_id',
            'comments',
            'post_id',
            'posts',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
