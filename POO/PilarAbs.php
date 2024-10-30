<?php
    class Funcionario {
        
        //atributos
        public $nome = 'Maria';
        public $telefone = '99 99999-9999';
        public $numFilhos = 1;

        //métodos
        public function resumirCadFunc(){
            return "Nome do funcionário: $this->nome <br>
            Telefone: $this->telefone <br>
            Número de filhos: $this->numFilhos";
        }

        public function modificarNumFilhos($n){
            $this->numFilhos = $n;
        }
    }

    $maria = new Funcionario();
    echo $maria->modificarNumFilhos(4);
    echo $maria-> resumirCadFunc();
?>