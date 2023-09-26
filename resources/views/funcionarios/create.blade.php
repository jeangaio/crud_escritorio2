@extends('crud_template')

@section('content')
<div class="card">
    <div class="card-header">
       <h2>Cadastro de funcionarios</h2> 
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
            <form action="{{ url('funcionarios/novo') }}" method="POST">
                @csrf
                <div class="row">
                    <strong>Nome:</strong>
                    <input placeholder="Digite o nome" class="form-control mb-3" name="nome" type="text" />
                    <strong>Salário:</strong>
                    <input placeholder="Digite a salario" class="form-control mb-3" name="salario" type="number" />
                    <strong>Email:</strong>
                    <input placeholder="Digite o email" class="form-control mb-3" name="email" type="text" />

                    <div class="col">
                        <a class="btn btn-secondary" href="{{ url('/funcionarios') }}">Voltar</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-success" type="submit">Confirmar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection