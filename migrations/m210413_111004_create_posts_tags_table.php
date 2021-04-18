<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts_tags}}`.
 */
class m210413_111004_create_posts_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%posts_tags}}', [
            'id' => $this->primaryKey(),
            'post_id'=>$this->integer(),
            'tag_id'=>$this->integer()
        ]);

        $this->createIndex(
            'idx_tag_post_post_id',
            'posts_tags',
            'post_id'
        );

        $this->addForeignKey(
            'fk_tags_posts_post_id',
            'posts_tags',
            'post_id',
            'posts',
            'id'
        );

        $this->createIndex(
            'idx_tag_id',
            'posts_tags',
            'tag_id',

        );
        $this->addForeignKey(
            'fk_tag_id',
            'posts_tags',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts_tags}}');
    }
}
