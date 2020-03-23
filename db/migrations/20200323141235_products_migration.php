<?php

use Phinx\Migration\AbstractMigration;

class ProductsMigration extends AbstractMigration
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
        $this->table('products')
            ->addColumn('category_id', 'integer', ['limit' => 11])
            ->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('description', 'text', ['limit' => 'TEXT_REGULAR'])
            ->addColumn('quantity_per_unit', 'integer', ['limit' => 11, 'default' => 0])
            ->addColumn('quantity_stock', 'integer', ['limit' => 11, 'default' => 0])
            ->addColumn('discontinued', 'integer', ['limit' => 1, 'default' => 0])
            ->addColumn('created_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addForeignKey('category_id', 'categories', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
            ->create();
    }
}
