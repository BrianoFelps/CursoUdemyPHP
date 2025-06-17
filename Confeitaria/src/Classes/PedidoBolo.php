<?php
declare(strict_types=1);

namespace App\Classes;

class PedidoBolo{
    private int $quantidade;
    public FormaDeBolo $formaBolo;

    public function __construct(private Cliente $cliente) {

    /*        class Cliente {
        public function __construct(
            private string $nome,
            private int $idade
        ){}


        public function getDadosCliente(): string{
            return "{$this->nome}. <br>
            Este cliente tem {$this->idade} anos.";
        }

    }*/

        $this->formaBolo = new FormaDeBolo();
    }

    public function resumoPedido (){
        return "<hr>Pedido do(a) cliente " . $this->cliente->getDadosCliente() . ": <br>" . $this->formaBolo->InformacoesBolo() . "<hr>";
    }

}

// $pedido1 = new PedidoBolo();
// $pedido1->resumoPedido();

?>