<?php

use yii\db\Migration;

/**
 * Class m230905_064226_tambah_kolom_post
 */
class m230905_064226_tambah_kolom_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post', 'title', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230905_064226_tambah_kolom_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230905_064226_tambah_kolom_post cannot be reverted.\n";

        return false;
    }
    */
}
