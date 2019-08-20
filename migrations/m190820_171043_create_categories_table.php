<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m190820_171043_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'parent' => $this->integer(),
            'alias' => $this->string(),
        ]);

        Yii::$app->db->createCommand()->batchInsert('categories', ['title','parent','alias'], [
            ['Apple техника','0','apple-technika'],
            ['Asus техника','0','asus-technika'],
            ['Samsung техника','0','samsung-technika'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
