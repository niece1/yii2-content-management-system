<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%albums}}`.
 */
class m190612_180723_create_albums_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('albums', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'image_main'=>$this->string(),
            'image_01'=>$this->string(),
            'image_02'=>$this->string(),
            'image_03'=>$this->string(),
            'image_04'=>$this->string(),
            'image_05'=>$this->string(),
            'image_06'=>$this->string(),
            'image_07'=>$this->string(),
            'image_08'=>$this->string(),
            'image_09'=>$this->string(),
            'image_10'=>$this->string(),
            'image_11'=>$this->string(),
            'image_12'=>$this->string(),
            'image_13'=>$this->string(),
            'image_14'=>$this->string(),
            'image_15'=>$this->string(),
            'image_16'=>$this->string(),
            'image_17'=>$this->string(),
            'image_18'=>$this->string(),
            'image_19'=>$this->string(),
            'image_20'=>$this->string(),
            'image_21'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('albums');
    }
}
