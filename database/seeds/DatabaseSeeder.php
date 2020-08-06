<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NotificationsTableSeeder::class);
        $this->call(DemoPermissionsPermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
    }
}
