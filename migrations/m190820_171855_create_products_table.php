<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190820_171855_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'alias' => $this->string(),
            'categories_id' => $this->integer(),
            'content' => $this->text(),
        ]);

        Yii::$app->db->createCommand()->batchInsert('products',['title','alias','categories_id','content'],[
           ['Iphone 10','iphone-10','1','<p>Очень интересное описание товара, возможно даже какие-то ссылки</p>'],
           ['Iphone 9','iphone-9','1','<p>Очень интересное описание товара, возможно даже какие-то ссылки</p>'],
           ['Iphone 8','iphone-8','1','<p>Очень интересное описание товара, возможно даже какие-то ссылки</p>'],
           ['Супер классынй Самсунг','samsung-100','3','<p>ВАУ! да это же лучший телефон на планете!</p>'],
           ['Самсунг стиральная машина','samsung-washing-machine','3','<p>ВАУ! да это же лучший телефон на планете!</p>'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
