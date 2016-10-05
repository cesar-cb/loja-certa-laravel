@extends('layouts.auth')

@section('content')

<div class="modal-dialog">
	<div class="loginmodal-container">
    	<h1>Registre Sua Loja</h1><br>
    	  <form method="POST" action="{{url('/registrar')}}">
    		<input type="text" name="name" placeholder="Nome da Loja">
    		<input type="text" name="identification" placeholder="CNPJ">
    		<input type="text" name="address_street" placeholder="Endereço da Loja">
    		<input type="text" name="address_number" placeholder="Número da Loja">
    		<input type="text" name="address_neighborhood" placeholder="Endereço vizinho">
    		<input type="text" name="address_city" placeholder="Cidade">
    		<input type="text" name="address_state" placeholder="Estado">
    		<input type="text" name="address_country" placeholder="País">
    		<input type="text" name="address_zip_code" placeholder="CEP">
    		<input type="password" name="password" placeholder="Senha">
    		<input type="submit" class="login loginmodal-submit" value="Cadastrar Loja">
    	  </form>
    	</div>
    </div>
</div>
    
    
@endsection