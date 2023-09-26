<?php

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FuncionariosControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_funcionario_creation()
{
   
    $user = User::factory()->create();

    
    $this->actingAs($user);

   
    $funcionarios = Funcionario::factory()->create();

    
    $response = $this->post('/funcionarios/novo', [
        'nome' => 'Funcionario Teste',
        'salario' => '1300',
        'email' => 'email@gmail.com',
        'funcionarios_id' => $funcionarios->id,
    ]);

    $response->assertStatus(302);
    $this->assertDatabaseHas('funcionarios', ['nome' => 'Nome Teste']);
}


public function test_funcionarios_update()
{
    // Crie um usuário para autenticar
    $user = User::factory()->create();
    $this->actingAs($user);

    // Crie uma funcionarios para atualizar
    $funcionarios = Funcionario::factory()->create();

    // Envie uma solicitação de atualização para o controlador
    $response = $this->put("/funcionarios/editar/{$funcionarios->id}", [
        'nome' => 'Nova Funcionario',
    ]);

    // Verifique se a atualização foi bem-sucedida
    $response->assertStatus(302);
    $this->assertDatabaseHas('funcionarios', [
        'id' => $funcionarios->id,
        'nome' => 'Novo Funcionario',
    ]);
}

public function test_funcionarios_delete()
{
    // Crie um usuário para autenticar
    $user = User::factory()->create();
    $this->actingAs($user);

    // Crie uma funcionarios para excluir
    $funcionarios = Funcionario::factory()->create();

    // Envie uma solicitação de exclusão para o controlador
    $response = $this->get("/funcionarios/delete/{$funcionarios->id}");

    // Verifique se a funcionarios foi excluída com sucesso
    $response->assertStatus(302);
    $this->assertDatabaseMissing('funcionarios', ['id' => $funcionarios->id]);
}
}