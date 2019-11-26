<?php

use yii\db\Migration;

/**
 * Class m191126_094807_create_cosplay_rank
 */
class m191126_094807_create_cosplay_rank extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cosplay', [
            'id'        => $this->primaryKey(),
            'name'      => 'varchar(100)',
            'country'   => 'varchar(100)',
            'photo'     => 'varchar(100)',
            'email'     => 'varchar(255)',
            'facebook_link'     => 'varchar(100)',
            'facebook_like'     => 'varchar(100)',
            'instagram_link'    => 'varchar(255)',
            'instagram_like'    => 'varchar(100)',
            'patreon_link'      => 'varchar(255)',
            'patreon_patron'      => 'varchar(100)',
            'created_at'        => "datetime NULL",
            'updated_at'        => "timestamp null ON update CURRENT_TIMESTAMP",
            'is_delete'         => "tinyint(1) not null default 0",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("cosplay");
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191126_094807_create_cosplay_rank cannot be reverted.\n";

        return false;
    }
    */
}
