<?php

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
  */
  public function run()
  {
    Eloquent::unguard();

    $this->call('UserTableSeeder');

    $this->command->info('User table seeded!');
  }

}

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->truncate();

    User::create(
      array(
        'name' => 'hoge',
        'email' => 'foo@bar.com'
      )
    );
  }
}
