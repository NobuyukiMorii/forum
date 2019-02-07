<?php
use Migrations\AbstractMigration;

class ChangeUserForACL extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->renameColumn('name', 'username');
        $table->changeColumn('password', 'string', [
            'limit' => 60,
            'default' => null,
            'null' => false,
        ]);
        $table->changeColumn('birthday', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('group_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->update();
    }
}
