@extends('layouts.layout')

@section('content')

    
   <div class="container text-center">
    <section class="row">
        <div class="col-md-12 text-center">
            <h1 class="slogan">
                Vender seu produto<br/>
                 nunca foi tão fácil!
            </h1>
            
            <p class="sub-title">Os melhores produtos e melhores preços em um só lugar</p>
        </div>
    </section>
    
    <section class="row">
        <div class="jumbotron embed-responsive embed-responsive-16by9">
            <video controls="controls" class="embed-responsive-item">
                <source src="video/VideoLojaCerta.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    
    <section class="row">
        <div class="col-md-6">
            <a class="btn-default">Baixe na App Store</a>
            <p class="sub-btn">para iPhone, iPad e iPod</p>
        </div>
      
        <div class="col-md-6">
            <a class="btn-default">Baixe na Google Play</a>
            <p class="sub-btn">para Android e Tablets</p>
        </div>
    </section>
    
    <section class="row">
        <div class="col-md-12">
            <h2 class="title2">Marketplace</h2>
            
            <p class="text">
                Milhares de usuários usam o LojaCerta diariamente à procura de lojas com o produto que eles procuram.<br/>
                Com o LojaCerta Marketplace você pode cadastrar seu empreendimento e enviar seus produtos para que<br/>
                nossos usuários achem fácil e rapidamente sua loja.
            </p>
        </div>
    </section>
    
    <section class="row">
        <div class="col-md-4 thumb">
            <img src="image/porquinho.png" alt="Icone-porquinho" />
            <h3>Envie seus produtos</h3>
            <p> No nosso marketplace você pode enviar
                a quantidade de produtos que quiser por
                uma pequena taxa mensal.
            </p>
        </div>
        
        <div class="col-md-4 thumb">
            <img src="image/papel.png" alt="Icone-porquinho" />
            <h3>Alcance clientes qualificados</h3>
            <p> 
                Nossas métricas ajudam o usuário a
                te achar com mais facilidade baseado
                em seu interesse. 
            </p>
        </div>
        
        <div class="col-md-4 thumb">
            <img src="image/maozinha.png" alt="Icone-porquinho" />
            <h3>Aumente suas vendas</h3>
            <p> 
                O LojaCerta Marketplace direciona
                com precisão seus produtos para
                usuários que procuram por aquilo,
                assim aumentando sua
                 popularidade e vendas
            </p>
        </div>
        
        <div class="col-md-12">
            <a class="btn-default" href="#">Cadastre sua loja</a>
        </div>
    </section>
    
    <section class="row">
        <div class="col-md-12">
            <h2 class="title2">Como funciona</h2>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <img class="diagrama" src="image/diagrama.png" alt="linha do tempo" />
        </div>
    </section>
    
</div>
@endsection