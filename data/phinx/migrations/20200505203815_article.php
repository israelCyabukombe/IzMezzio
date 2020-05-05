<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

/**
 * Class Article
 *
 * This will hold the articles that go on XSS-Page
 *
 */
class Article extends AbstractMigration
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
        $this->table('article', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer', ['limit' => 10])
            ->addColumn('title', 'string', ['limit' => 128])
            ->addColumn('author', 'string', ['limit' => 128])
            ->addColumn('content', 'text', ['limit' => MysqlAdapter::TEXT_LONG])
            ->addColumn('date_created', 'datetime', ['default' => '1000-01-01 00:00:00'])
            ->create();
    }
}
