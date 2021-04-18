<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%comments}}`.
 */
class m210413_120245_add_created_at_column_to_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('comments', 'created_at', $this->dateTime());
        $this->addColumn('comments', 'updated_at', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('comments', 'created_at');
        $this->dropColumn('comments', 'updated_at');
    }
}
