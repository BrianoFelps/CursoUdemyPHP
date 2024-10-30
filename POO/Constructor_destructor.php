<?php
    //entidade
    class Pessoa {
        
        public $nome = null;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        function __destruct (){
            echo 'Objeto morreu';
        }

        function __get ($a){
            return $this->$a;
        }
    }

    //identidade
    $pessoa = new Pessoa('Brian');
    echo $pessoa->__get('nome') . '<br>'

    //O método destruct é realizado automaticamente ao fim do código no lado do servidor, ou propositalmente com unset($pessoa)
?>