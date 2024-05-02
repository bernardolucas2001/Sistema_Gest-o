<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    
    public function run(): void
    {
        Produto::create([
            'nome'=> 'Xbox',
            'Valor' => '4000.00'
        ]);
    }
}
