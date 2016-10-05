<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call('CustomersTableSeeder');
        $this->call('StoresTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('ReservationsTableSeeder');
        $this->call('PhonesTableSeeder');
        $this->call('PhotosTableSeeder');
        
    }
}
