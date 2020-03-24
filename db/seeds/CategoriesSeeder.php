<?php

use Cake\Chronos\Chronos;
use Phinx\Seed\AbstractSeed;

class CategoriesSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $rows = [
            [
                'name'  => 'Eletrônicos',
                'description' => 'Produtos eletrônicos em geral',
                'created_at' => Chronos::now(),
                'updated_at' => Chronos::now()
            ]
        ];

        $categories = $this->table('categories');
        $categories->insert($rows)->saveData();
    }
}
