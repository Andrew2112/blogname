<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%comments}}`.
 */
class m210427_072122_add_parent_id_column_to_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%comments}}', 'parent_id', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%comments}}', 'parent_id');
    }
}
