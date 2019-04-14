<?php

use yii\db\Migration;

/**
 * Class m190328_153744_create_table_category
 */
class m190328_153744_create_table_category extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);

    }

    public function down()
    {
        $this->dropTable('category');

    }
}
