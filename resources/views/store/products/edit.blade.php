@extends('layouts.store')

@section('content')

    
    
<div class="container">
   <div class="modal-dialog">
	<div class="loginmodal-container">
    	<h1>Editar Produto</h1><br>
    	  <form method="POST" action="{{url('/dashboard/product/update/') . '/' . $product->id}}">
    	      @if (count($errors) > 0)
                    <div class="alert alert-info">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
              @endif
    	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	    
    	    <div class="form-group">
    		    <input type="text" name="name" value="{{ $product->name }}" placeholder="Nome o Produto">
    		</div>
    		
    		<div class="form-group">
    		    <textarea name="description" class="md-textarea" placeholder="Descrição">{{ $product->description }}</textarea>
            </div>
            
            <div class="form-group">
    		    <input type="text" name="original_price" value="{{ $product->original_price }}" placeholder="Preço Original">
    		</div>
    		
    		<div class="form-group">
    		    <input type="text" name="price" value="{{ $product->price }}" placeholder="Preço">
    		</div>
    		
    		<div class="form-group">
    		    <input type="text" name="stock" value="{{ $product->stock }}" placeholder="Quantidade no Estoque">
    		</div>
    		
    		<div class="form-group">
    		    <input type="text" name="due_time" value="{{ $product->due_time }}" placeholder="Horas em Reserva">
    		</div>
    		
    		<div class="form-group">
    		    <input type="text" name="barcode" value="{{ $product->barcode }}" placeholder="Codigo de Barras">
    		</div>
    		
    		<input type="hidden" name="store" value="{{ Auth::user()->id }}">

            <div class="form-group">
    		    <input type="submit" class="btn btn-success" value="Editar Produto">
    		</div>
    		
    	  </form>
    	</div>
    </div>
</div>

</div>
    
    
@endsection