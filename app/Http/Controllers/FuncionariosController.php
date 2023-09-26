<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;

class FuncionariosController extends Controller
{
    public function index()
    {

        $funcionarios = DB::table('funcionarios')->orderBy('nome', 'asc')->get();
        $funcionarios = json_decode($funcionarios, true);
        return view(
            'funcionarios.index',
            ['funcionarios' => $funcionarios]
        ); //select * from funcionarios
    }

    //função que irá retornar a tela do form
    public function create()
    {
        return view("funcionarios.create");
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nome' => 'required|min:2|max:50',
            'email' => 'required|email:rfc,dns'
        ]);

        Funcionario::create([
            'nome' => $request->nome,
            'salario' => $request->salario,
            'email' => $request->email
        ]);
        return redirect('/funcionarios')->with('success', 'Funcionario salvo com sucesso!');
    }


    public function destroy($id)
    {

        $funcionario = Funcionario::find($id);

        $funcionario->delete();
        return redirect('/funcionarios');
    }



    public function edit($id)
    {

        $funcionario = Funcionario::find($id);

        return view('funcionarios.edit', ['funcionario' => $funcionario]);
    }
    public function update(Request $request)
    {

        $funcionario = Funcionario::find($request->id);
        //método update faz um update aluno set nome = ?, salario=? ...
        $funcionario->update([
            'nome' => $request->nome,
            'salario' => $request->salario,
            'email' => $request->email
        ]);
        return redirect('/funcionarios');
    }
}
