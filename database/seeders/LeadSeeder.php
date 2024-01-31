<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    public function run()
    {
        Lead::create([
            'nome' => 'Lead 1',
            'email' => 'lead1@example.com',
            'telefone' => '123456789',
            'empresa' => 'Empresa 1',
            'cargo' => 'Cargo 1',
            'interesses' => 'Interesse 1, Interesse 2',
            'fonte' => 'Fonte 1',
            'status' => 'novo',
        ]);

        Lead::create([
            'nome' => 'Lead 2',
            'email' => 'lead2@example.com',
            'telefone' => '987654321',
            'empresa' => 'Empresa 2',
            'cargo' => 'Cargo 2',
            'interesses' => 'Interesse 3, Interesse 4',
            'fonte' => 'Fonte 2',
            'status' => 'em_acompanhamento',
        ]);
    }
}
