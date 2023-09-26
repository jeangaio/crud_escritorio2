@extends('crud_template')

@section('content')



<div class="card">
    <div class="card-header">
        <h2>Editar cadastro de funcionário</h2>
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



        <div class="row">
            <form action="{{ url('funcionarios/editar') }}" method="POST">
                @csrf
                <div class="row">


                    <!-- campo oculto passando o ID como parâmetro no request -->
                    <input type="hidden" name="id" value="{{ $funcionario['id'] }}">
                    <strong>Nome:</strong>
                    <input class="form-control mb-3" name="nome" type="text" value="{{ $funcionario['nome'] }}" /><br>
                    <strong>Salário:</strong>
                    <input class="form-control mb-3" name="salario" type="number" value="{{ $funcionario['salario'] }}" /><br>
                    <strong>Email:</strong>
                    <input class="form-control mb-3" name="email" type="text" value="{{ $funcionario['email'] }}" /><br>


                    <div class="col">
                        <button class="btn btn-success" type="submit">Confirmar</button>
                    </div>

                    <div class="col">
                        <a class="btn btn-secondary" href="{{ url('/funcionarios') }}">Voltar</a>
                    </div>

            </form>
            </body>

            </html>

            @endsection