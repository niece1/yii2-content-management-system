<?php

use yii\db\Migration;

/**
 * Class m190328_154006_create_table_user
 */
class m190328_154006_create_table_user extends Migration
{
   
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string()->defaultValue(null),
            'password'=>$this->string(),
            'isAdmin'=>$this->integer()->defaultValue(0),
            'photo'=>$this->string()->defaultValue(null)
        ]);

    }

    public function down()
    {
        $this->dropTable('user');

    }
}
