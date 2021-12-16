<?php

use yii\db\Migration;

/**
 * Class m171121_120201_user
 */
class m211109_100000_project_users extends Migration
{

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('project_user', [
            'project_id' => $this->integer(),
            'user_id' => $this->integer()
        ]);

        $this->addPrimaryKey('pk_project_user','project_user',['project_id','user_id']);
        $this->addForeignKey('fk_project_user_project_id','project_user','project_id','project','id');
        $this->addForeignKey('fk_project_user_user_id','project_user','user_id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {

        $this->dropTable('project_user');
    }
}
