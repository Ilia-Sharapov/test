<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'user_name' => 'admin@admin.com',
                'password' => '$2y$10$SuPPwcO93.4L8WnRYsbqmerkl0fPENBTk6DnTN3PLyG4nTGPO07PK',
                'created' => '2020-06-04 15:32:30',
                'age' => '21',
                'phone_number' => '515',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
