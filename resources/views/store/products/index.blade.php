@extends('layouts.store')

@section('content')

 @if (session('message'))
  <div class="alert alert-info">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <ul>
        <li><strong>{{ session('message') }}</strong></li>
    </ul>
  </div>
@endif

    
    
<div class="container">
    <div class="line-up">
        <h1>Produtos Cadstrados:</h1>
        <a href="/dashboard/product/create" class="btn btn-success">Adicionar Produto</a>
    </div>
    
    <div class="row">
        
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
               
            <div class="card" style="margin-bottom:60px">
    
                <!--Card image-->
                <img class="img-fluid" src="http://placehold.it/262/175" alt="Imagem do produto">
                <!--/.Card image-->
            
                <!--Card content-->
                <div class="card-block">
                    <!--Title-->
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <!--Text-->
                    <p class="card-text">
                        {{ substr($product->description, 0, 200) }}
                        <br><br>
                        
                        <b>R$ {{ $product->price }}</b>
                    </p>
                    <div class="product-actions">
                        <form method="POST" action="{{url('/dashboard/product/destroy') . '/' . $product->id}}" style="display:inline-block;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input type="submit" class="btn btn-danger" value="Deletar"/>
                        </form>
                        <a href="/dashboard/product/edit/{{ $product->id }}" class="btn btn-warning" style="display:inline-block;">Editar</a>
                    </div>
                </div>
                <!--/.Card content-->
    
            </div>
        
        </div>
            @endforeach
    </div>
    




</div>
    
    
@endsection