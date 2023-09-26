@extends('crud_template')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="card text-white bg-dark mb-3">
    <div class="card-header text-center">
        <h2>Login</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Problemas com seus dados:</strong>
                    <br>
                    @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <strong>Email</strong>
            <input class="form-control mb-3" type="email" name="email" id="email">
            <strong>Senha</strong>
            <input class="form-control mb-3" type="password" name="password" id="password">
            <div class="text-center">
                <button class="btn btn-primary" type="submit"> <i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>
        </form>
    </div>
</div>
@endsection