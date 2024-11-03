<?php

    interface VeiculoInterface{
        public function acelerar();
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function frear(){
            echo 'Freou...';
        }

        function buzinar(){
            echo 'bi biiiiiiiii';
        }

        private function acelerar(){
            echo 'vrummm';
        }

        public function acao(){
            return $this->acelerar();
        }
    }

    class Carro extends Veiculo{
        private $tetoSolar = null;

        public function __construct($placa, $cor, $tetoSolar) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->tetoSolar = $tetoSolar;
        }

        function abrirTetoSolar(){
            echo 'Abrindo teto solar';
        }
    }   

    class Moto extends Veiculo{
        private $contraPesoGuidao = null;

        public function __construct($placa, $cor, $contraPesoGuidao) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->contraPesoGuidao = $contraPesoGuidao;
        }
        
        function empinar(){
            echo 'Empinando';
        }
    }

    $carro = new Carro('F4287G8', 'Azul', true);
    $moto = new Moto('G782JFA', 'Rosa', true);

    echo '<pre>';
        print_R($carro);
        echo "<br>";
        print_R($moto);
    echo '</pre>';

    echo "</hr>";
    $carro->buzinar();
    echo "<br>";
    $carro->frear();
    echo "<br>";echo "<br>";
    $moto->buzinar();
    echo "<br>";
    $moto->frear();
    echo "<br>";
    $carro->acao();
?>