@extends('principal')
@section('content')
    <form class="form-signin" method ="POST" action = "valida_login.php">
        <img class="mb-4" src="image/ube12.png" alt="seção de manutenção" width = 180 height = 90>
        <h1 class="h3 mb-3 font-weight-normal">Faça o login</h1>
        <label for="inputNumber" class="sr-only">CPF</label>
        <input type="text" id="inputNumber"  class="form-control" name="cpf" placeholder="CPF - somente os numeros" onkeypress="return onlynumber();" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020 - Seção de Manutenção</p>      
        <p class = "text-center text-danger" >
      </p>
    </form>
@stop