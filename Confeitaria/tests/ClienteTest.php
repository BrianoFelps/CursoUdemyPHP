<?php
namespace Test\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\Cliente;

class ClienteTest extends TestCase{
    private Cliente $cliente;

    protected function setUp():void {
        $this->cliente = new Cliente ("Ba", 17);
    }

    public function testMetodoClienteExiste(){

        $this->assertTrue( /*Método da classe PHPUnit\Framework\TestCase*/
            method_exists/*Método nativo PHP*/($this->cliente, 'cliente'),
            "O método cliente não existe na classe Cliente!"
        );
    }

    // public function testGetDadosCliente(){

    //     $cliente = new Cliente("Bonobo", 18);
    //     $resultado = $cliente->getDadosCliente();

    //     $this->assertStringContainsString("Bonobo", $resultado);
    // }
}

?>