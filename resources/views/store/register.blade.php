@extends('layouts.auth')

@section('content')

<div class="modal-dialog">
	<div class="loginmodal-container">
    	<h1>Registre Sua Loja</h1><br>
    	  <form method="POST" action="{{url('/registrar')}}">
    	      @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
              @endif
    	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    		<input type="text" name="name" value="{{ old('name') }}" placeholder="Nome da Loja">
    		<input type="text" name="identification" value="{{ old('identification') }}" class="mask-cnpj" placeholder="CNPJ">
    		<input type="text" name="address_street" value="{{ old('address_street') }}" placeholder="Endereço da Loja">
    		<input type="text" name="address_number" value="{{ old('address_number') }}" placeholder="Número da Loja">
    		<input type="text" name="address_neighborhood" value="{{ old('address_neighborhood') }}" placeholder="Endereço vizinho">
    		<input type="text" name="address_city" value="{{ old('address_city') }}" placeholder="Cidade">
    		<input type="text" name="address_state" value="{{ old('address_state') }}" placeholder="Estado">
    		<input type="text" name="address_country" value="{{ old('address_country') }}" placeholder="País">
    		<input type="text" name="address_zip_code" value="{{ old('address_zip_code') }}" placeholder="CEP">
    		<input type="password" name="password" placeholder="Senha">
    		<input type="submit" class="login loginmodal-submit" value="Cadastrar Loja">
    	  </form>
    	</div>
    </div>
</div>
    
    
@endsection