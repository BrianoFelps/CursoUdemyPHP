<?php
declare(strict_types = 1);

namespace App\Classes;


class Cliente {
    public function __construct(
        private string $nome,
        private int $idade
    ){
    }


    public function getDadosCliente(): string{
        return "{$this->nome}, que tem {$this->idade} anos";
    }

}



?>