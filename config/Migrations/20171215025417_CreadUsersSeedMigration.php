<?php
use Migrations\AbstractMigration;

class CreadUsersSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('Users', 50, [
            'first_name' => function () use ($faker) {
                return $faker->firstName();
            },
            'last_name' => function () use ($faker) {
                return $faker->lastName();
            },
            'email' => function () use ($faker) {
                return $faker->safeEmail();
            },
            'password' => function () {
                return 'secret';
            },
            'role' => 'user',
            'active' => function() {
                return rand(0, 1);
            },
            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            }
        ]);
        $populator->execute();
    }
}
