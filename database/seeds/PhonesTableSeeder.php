<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Phone;  
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder  
{
    public function run()
    {       
        Phone::create([
            "customer_id" => 1,
            "phone" => "945125495",
        ]);
        
        Phone::create([
            "customer_id" => 1,
            "phone" => "988412567",
        ]);
        
        Phone::create([
            "customer_id" => 11,
            "phone" => "955123640",
        ]);
        

    }
}