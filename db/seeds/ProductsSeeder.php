<?php

use Cake\Chronos\Chronos;
use Phinx\Seed\AbstractSeed;

class ProductsSeeder extends AbstractSeed
{

    public function getDependencies()
    {
        return [
            'UserSeeder',
            'CategoriesSeeder'
        ];
    }
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
                'category_id' => 1,
                'name'  => 'MacBook Pro',
                'description' => 'Tela Retina 13,3 polegadas, Processador Até Intel Core i7 com quatro núcleos',
                'quantity_per_unit' => 1,
                'quantity_stock' => 20,
                'discontinued' => 0,
                'created_at' => Chronos::now(),
                'updated_at' => Chronos::now()
            ]
        ];

        $products = $this->table('products');
        $products->insert($rows)->saveData();
    }
}
