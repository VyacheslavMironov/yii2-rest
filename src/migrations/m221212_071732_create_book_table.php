<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m221212_071732_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'author' => $this->string(),
            'pages' => $this->integer(),
            'release_year' => $this->smallInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
