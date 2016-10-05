<?php

# database/seeds/QuoteTableSeeder.php

use App\Model\Product;  
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder  
{
    public function run()
    {       
        Product::create([
            "name" => "TV LED 40 Panasonic Full HD",
            "description" => "Novas sensações e muito mais diversão em sua casa com a Smart TV LED 32 Samsung Projetada justamente para os amantes da tecnologia, ela oferece um mundo especial de funções e aplicativos, que torna único cada segundo em frente à TV. Essa TV traz a mais alta qualidade de imagem HD e interatividade, exibindo riqueza de detalhes e possibilitando o acesso a uma diversidade de conteúdos de entretenimento.",
            "price" => 1439,
            "original_price" => 1439,
            "stock" => 10,
            "barcode" => "48DA85SD4",
            "status" => "active",
            "due_time" => "11:00:00",
            "store" => 1
        ]);
        
        Product::create([
            "name" => "iPhone 6 64GB Cinza Espacial",
            "description" => "O iPhone 6 não é só maior, ele é melhor em todos os sentidos. É maior, muito mais fino, mais poderoso, e consome muito menos energia. A superfície de metal lisa se integra perfeitamente à nossa tela Multi-Touch mais avançada. É uma nova geração de iPhone melhor em tudo.",
            "price" => 2500,
            "original_price" => 2500,
            "stock" => 300,
            "barcode" => "9F45DS7",
            "status" => "active",
            "due_time" => "09:00:00",
            "store" => 1
        ]);
        
        Product::create([
            "name" => "Console Sony PlayStation 4 500GB",
            "description" => "O Console Playstation4 500GB, da Sony, é uma central de entretenimento versátil que atende o público gamer e famílias que procuram um aparelho que garante diversão por um mundo de alta resolução em imagens, som e jogabilidade imersiva. ",
            "price" => 1400,
            "original_price" => 1400,
            "stock" => 120,
            "barcode" => "5DF8A3F",
            "status" => "active",
            "due_time" => "09:00:00",
            "store" => 1
        ]);
    }
}