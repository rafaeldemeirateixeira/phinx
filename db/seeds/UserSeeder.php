<?php

use Cake\Chronos\Chronos;
use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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
                'name'  => 'Rafael Teixeira',
                'email' => 'rafael@gmail.com.br',
                'password' => password_hash(123456, PASSWORD_BCRYPT),
                'created_at' => Chronos::now(),
                'updated_at' => Chronos::now()
            ]
        ];

        $this->table('users')->insert($rows)->save();
    }
}
