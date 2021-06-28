<?php

use yii\db\Migration;

/**
 * Class m210628_162056_alter_product_table
 */
class m210628_162056_alter_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','category_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product', 'category_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210628_162056_alter_product_table cannot be reverted.\n";

        return false;
    }
    */
}
