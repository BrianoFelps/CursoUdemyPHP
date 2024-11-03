<?php
    class Exemplo {
        //Na variável estática, não se pode chamá-la com a seta ->
        public static $oi = 'oi';
        public $ae = 'ae';

        //Dentro da função, não se pode chamar atributos com o $this->, já que o $this trabalha com o contexto dos atributos no escopo da classe, e os atributos não-estáticos só virão a existir após a atribuição de um objeto por instância da classe. (como na linha 24)
        public static function falarOi(){
            echo Exemplo::$oi;
        }

        public function falarAe(){
            return this->ae;
        }
    }

    echo Exemplo::$oi;
    echo '<br/>';
    echo '<br/>';
    Exemplo::falarOi();
    echo '<br/>';
    echo '<br/>';
    echo 'Erros:';
    $exemplo = new Exemplo();
    $exemplo->$oi;
    Exemplo::falarAe();
    ?>