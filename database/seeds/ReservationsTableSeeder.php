<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Reservation;  
use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder  
{
    public function run()
    {       
        Reservation::create([
            "customer" => 1,
            "product" => 1,
            "status" => "due",
            "due_date" => "2016-04-30 15:21:10",
            "paid_price" => 2000
        ]);
        
        Reservation::create([
            "customer" => 1,
            "product" => 11,
            "status" => "due",
            "due_date" => "2016-04-30 15:21:10",
            "paid_price" => 1500
        ]);
        
    }
}