<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m210408_182219_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'title'=>$this->string(255)->unique()->notNull(),
            'excerpt'=>$this->string(255)->notNull(),
            'text'=>$this->text()->notNull(),
            'image'=>$this->string(255),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime()
        ]);
        $this->addForeignKey(
            'fk-posts-category_id',
            'posts',
            'category_id',
            'categories',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
