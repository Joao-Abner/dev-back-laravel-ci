<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestAsserts extends TestCase
{
    public function test_nome_contem_substring()
    {
        $nomeCompleto = 'João da Silva';
        $this->assertStringContainsString('Silva', $nomeCompleto); 
    }

    public function test_usuario_autenticado()
    {
        $usuario = true; 
        $this->assertTrue($usuario); 
    }

    public function test_array_contem_elemento()
    {
        $array = ['laravel', 'php', 'javascript'];
        $this->assertContains('laravel', $array);
    }
}
