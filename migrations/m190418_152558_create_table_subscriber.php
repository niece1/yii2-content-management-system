<?php

use yii\db\Migration;

/**
 * Class m190418_152558_create_table_subscriber
 */
class m190418_152558_create_table_subscriber extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('subscriber', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    public function down()
    {
        $this->dropTable('subscriber');
    }
}
