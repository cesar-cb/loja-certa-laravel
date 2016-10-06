@extends('layouts.auth')

@section('content')

<div class="modal-dialog">
	<div class="loginmodal-container">
    	<h1>Entrar na conta</h1><br>
    	  <form method="POST" action="{{url('/entrar')}}">
    	       @if (session('message'))
                  <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('message') }}</li>
                    </ul>
                  </div>
                @endif
    	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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