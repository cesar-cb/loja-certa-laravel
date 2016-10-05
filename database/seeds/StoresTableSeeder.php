<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Store;  
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder  
{
    public function run()
    {
        Store::create([
          "name" => "A Market",
    	  "identification" => "61.335.461/0001-00",
    	  "password" => "mySecretPass",
    	  "address_street" => "Av. Lins de Vasconcelos, São Paulo",
    	  "address_number" => 1220,
    	  "address_neighborhood" => "Av. Lins de Vasconcelos, São Paulo, 1225",
    	  "address_city" => "São Paulo",
    	  "address_state" => "São Paulo",
    	  "address_country" => "Brasil",
    	  "address_zip_code" => "04112-011"
        ]);
        
        Store::create([
          "name" => "Central Place",
    	  "identification" => "65.236.467/0001-80",
    	  "password" => "mySecretPass",
    	  "address_street" => "Rua Pedro Gromwell",
    	  "address_number" => 590,
    	  "address_neighborhood" => "Av. Lins de Vasconcelos, São Paulo, 1225",
    	  "address_city" => "São Lúis",
    	  "address_state" => "Maranhão",
    	  "address_country" => "Brasil",
    	  "address_zip_code" => "65051-720"
        ]);
        
        Store::create([
          "name" => "Master Store",
    	  "identification" => "06.766.882/0001-87",
    	  "password" => "mySecretPass",
    	  "address_street" => "Rua Santo Antônio",
    	  "address_number" => 367,
    	  "address_neighborhood" => "Av. Lins de Vasconcelos, São Paulo, 1225",
    	  "address_city" => "Belém",
    	  "address_state" => "Pará",
    	  "address_country" => "Brasil",
    	  "address_zip_code" => "66923-100"
        ]);
        
        Store::create([
          "name" => "Tech Magazine",
    	  "identification" => "15.205.599/0001-77",
    	  "password" => "mySecretPass",
    	  "address_street" => "Avenida Providência",
    	  "address_number" => 754,
    	  "address_neighborhood" => "Av. Lins de Vasconcelos, São Paulo, 1225",
    	  "address_city" => "Santo Antônio de Jesus",
    	  "address_state" => "Bahia",
    	  "address_country" => "Brasil",
    	  "address_zip_code" => "44574-270"
        ]);

    }
}