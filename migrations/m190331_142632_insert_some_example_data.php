<?php

use yii\db\Migration;

/**
 * Class m190331_142632_insert_some_example_data
 */
class m190331_142632_insert_some_example_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->insert('users',[
            'usr_id'=>1,
            'login' => 'test',
            'email'=>'test@test.ru',
            'password_hash'=>'qwer',
        ]);

        $this->insert('users',[
            'usr_id'=>2,
            'login' => 'test2',
            'email'=>'test2@test.ru',
            'password_hash'=>'qwert',
        ]);


        $this->batchInsert('activity',
            ['title','usr_usr_id','description','start_date','is_blocked','is_repeated'],
            [
                ['title 1',1,'desc',date('Y-m-d'),mt_rand(0,1),mt_rand(0,1)],
                ['title 2',1,'deswc 2',date('Y-m-d'),mt_rand(0,1),mt_rand(0,1)],
                ['title 3',1,'desc',date('Y-m-d'),mt_rand(0,1),mt_rand(0,1)],
                ['title 4',2,'deswc 2',date('Y-m-d'),mt_rand(0,1),mt_rand(0,1)],
                ['title 5',2,'deswc 2',date('Y-m-d'),mt_rand(0,1),mt_rand(0,1)]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190331_142632_insert_some_example_data cannot be reverted.\n";
        $this->delete('activity');
        $this->delete('users');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190331_142632_insert_some_example_data cannot be reverted.\n";

        return false;
    }
    */
}
