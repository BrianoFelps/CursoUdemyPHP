<?php
    //entidade
    class Funcionario {
        
        //atributos
        public $nome = 'Maria';
        public $telefone = null;
        public $numFilhos = 1;

        function setTelefone($tel){
            return $this->telefone = $tel;
        }
        function getTelefone(){
            return $this->telefone;
        }

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

    //identidade
    $maria = new Funcionario();
    $maria->modificarNumFilhos(4);
    echo $maria->resumirCadFunc() . '<br>';
    $maria->setTelefone('44 98045-4565');
    echo $maria->getTelefone();
?>