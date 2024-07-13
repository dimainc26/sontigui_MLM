<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSuperUserTable extends AbstractMigration
{
    public function up()
    {
        $this->table('users')
            ->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['null' => true, 'default' => null, 'update' => 'CURRENT_TIMESTAMP'])
            ->create();
    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
