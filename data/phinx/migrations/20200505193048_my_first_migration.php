<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

/**
 * Class Tag
 *
 * This is for taging names of people to articles
 *
 * @author Israel Cyabukombe
 */
class MyFirstMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('tag', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer', ['limit' => 10])
            ->addColumn('name', 'string', ['limit' => 4])
            ->create();
    }
}
