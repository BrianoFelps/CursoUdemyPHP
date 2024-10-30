<?php
    //entidade
    class Funcionario {
        
        //atributos
        public $nome = 'Maria';
        public $telefone = null;
        public $numFilhos = 1;
        public $cargo = null;
        public $salario = null;

        //getters & setters (overloading)
        function __set($atr, $val){
            $this->$atr = $val;
        }

        function __get($atr){
            return $this->$atr;
        }

        //getters & setters
        // function setTelefone($tel){
        //     return $this->telefone = $tel;
        // }

        // function getTelefone(){
        //     return $this->telefone;
        // }

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
    $maria->__set('telefone','44 98045-4565');
    echo $maria->__get('telefone');
?>