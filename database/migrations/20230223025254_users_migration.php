<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('user_id', 'integer')
              ->addColumn('name', 'string')
              ->addColumn('password', 'string', ['limit' => 40])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addIndex(['email'], ['unique' => true])
              ->create();
    }
}
