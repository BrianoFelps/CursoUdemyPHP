<?php

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function frear(){
            echo 'Freou...';
        }

        function buzinar(){
            echo 'bi biiiiiiiii';
        }

        //Método novo ao comparado com o de herança, veja que a moto é o contrário, primeiro a mão e depois o pé
        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha à mão';
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

        //Alterado aqui (sobrescrito, aplicando a particularidade de polimorfismo)
        function trocarMarcha(){
            echo 'Desengatar embreagem com a mão e engatar marcha ao pé';
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
    echo "<br>";
    $carro->trocarMarcha();
    echo "<br>";echo "<br>";
    $moto->buzinar();
    echo "<br>";
    $moto->frear();
    echo "<br>";
    $moto->trocarMarcha();
?>