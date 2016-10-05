@extends('layouts.auth')

@section('content')

<div class="modal-dialog">
	<div class="loginmodal-container">
    	<h1>Entrar na conta</h1><br>
    	  <form method="POST" action="{{url('/entrar')}}">
    		<input type="text" name="identification" placeholder="CNPJ" class="mask-cnpj">
    		<input type="password" name="password" placeholder="Senha">
    		<input type="submit" name="login" class="login loginmodal-submit" value="Login">
    	  </form>
    		
    	 <div class="login-help">
    		<a href="/registrar">Registrar</a>
    	  </div>
    	</div>
    </div>
</div>
    
    
@endsection