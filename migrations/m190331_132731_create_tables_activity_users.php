<?php

use yii\db\Migration;

/**
 * Class m190331_132731_create_tables_activity_users
 */
class m190331_132731_create_tables_activity_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('activity',[
            'actv_id'        => $this->primaryKey(),
            'title'          => $this->string(200)->notNull(),
            'start_date'     => $this->dateTime(),
            'end_date'       => $this->dateTime(),
            'usr_usr_id'     => $this->integer()->notNull(),
            'description'    => $this->text(),
            'is_blocked'     => $this->boolean(),
            'is_repeated'    => $this->boolean(),
            'navi_date'      => $this->dateTime()->notNull()->defaultExpression('now()')


    ]

    );
         $this->createTable('users',[
             'usr_id'=>$this->primaryKey(),
             'login' => $this->string(100)->notNull(),
             'email'=>$this->string(150)->notNull(),
             'password_hash'=>$this->string(300)->notNull(),
             'token'=>$this->string(300),
             'auth_key'=>$this->string(150),
             'navi_date' => $this->dateTime()->notNull()->defaultExpression('now()')
         ]);

         $this->addForeignKey('fk_actv_usr_usr_id','activity','usr_usr_id','users','usr_id');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190331_132731_create_tables_activity_users cannot be reverted.\n";
        $this->dropForeignKey('fk_actv_usr_usr_id','activity');
        $this->dropTable('activity');
        $this->dropTable('users');


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190331_132731_create_tables_activity_users cannot be reverted.\n";

        return false;
    }
    */
}
