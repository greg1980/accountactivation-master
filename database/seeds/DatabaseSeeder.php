<?php

use Illuminate\Database\Seeder;
use\App\Registration;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();

        // $this->call(UsersTableSeeder::class);
        $this->call(RegistrationsTableSeeder::class);

       Model::reguard();
    }
}
