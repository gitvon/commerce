@extends('layout.app')

@section('content')
    <div class="heading text-center">
         <h1>Seja mais um investidor fazendo parte de nossa comunidade.</h1>
    </div>
    {!!Form::open(array('url' => 'home', 'class' => 'form-login', 'role' => 'form'))!!}
    {!!Form::close()!!}
    <form class="form-login" role="form">
        <input type="email" class="form-control" placeholder="Email" required autofocus>
        <input type="password" class="form-control" placeholder="Senha" required>
        <a class="pull-right" href="http://www.gruin.com.br/recuperar">Esqueceu a senha?</a>
        <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>
        <p class="text-center"><a href="http://www.gruin.com.br/register">Criar uma conta</a></p>
    </form>
@stop
