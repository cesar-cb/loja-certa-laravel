<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Photo;  
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder  
{
    public function run()
    {       
        Photo::create([
            "product_id" => 1,
            "path" => "https://www.zoom.com.br/tv/smart-tv-led-40-panasonic-viera-full-hd-tc-40cs600b",
        ]);
        
        Photo::create([
            "product_id" => 11,
            "path" => "http://smb.optus.com.au/opfiles/Shop/Consumer/Assets/Images/responsive-product-page/Apple/iphone6-plus-spacegrey.png",
        ]);
        
        
        Photo::create([
            "product_id" => 21,
            "path" => "http://www.extra-imagens.com.br/Games/Playstation4/ConsolesPlaystation4/1940388/7850348/Playstation-4-Sony-Preto-1940388.jpg",
        ]);
    }
}