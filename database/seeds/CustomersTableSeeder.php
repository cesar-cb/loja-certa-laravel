<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Customer;  
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder  
{
    public function run()
    {       
        Customer::create([
            "email" => "John.Doe@email.com",
            "password" => "MySuperSecretPass",
            "first_name" => 'John',
            "last_name" => 'Doe',
            "identification" => '246.217.189-40'
        ]);
        
        Customer::create([
            "email" => "Margaret.Donna@email.com",
            "password" => "MySuperSecretPass",
            "first_name" => 'Margaret',
            "last_name" => 'Donna',
            "identification" => '893.926.874-19'
        ]);
        
    }
}