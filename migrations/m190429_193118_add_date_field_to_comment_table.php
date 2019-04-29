<?php

use yii\db\Migration;

/**
 * Class m190429_193118_add_date_field_to_comment_table
 */
class m190429_193118_add_date_field_to_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        
        $this->addColumn('comment', 'date', $this->date());

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('comment', 'date');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190429_193118_add_date_field_to_comment_table cannot be reverted.\n";

        return false;
    }
    */
}
