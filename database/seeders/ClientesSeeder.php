<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{

    public function run(): void
    {
        Cliente::create(
        [
                'nome' => 'João',
        'email' => 'joao@email.com',
        'endereco' => 'Rua dos perdidos',
        'logradouro' => 'Lugar dos que naõ foram',
        'cep' => '12345.678',
        'bairro' => 'Bairro x',
    ]);
    Cliente::create(
        [
                'nome' => 'Teste',
        'email' => 'teste@email.com',
        'endereco' => 'Rua dos perdidos',
        'logradouro' => 'Lugar dos que naõ foram',
        'cep' => '98765.432',
        'bairro' => 'Bairro y',
    ]);





    }
}
