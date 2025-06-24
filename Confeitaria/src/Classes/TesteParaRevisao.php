<?php
declare(strict_types = 1);

namespace App\Classes;

class TesteParaRevisao{
    // private array $array = ['Daniel', 'Carlos', 'Brian', 'Ana'];
    // // private array $array2 = ['Leila'];
    
    public function __construct(
        private int $anosDeIdade,
        private string $nomeCompleto,
        public bool $estaTrabalhando
    ){
    }

    // public function retirarNomeDaLista(string $nomeDigitado): void{

    // }


    // private static int $numeroFuncionariosOcupados = 0;

    //O valor estático é instanciado pela classe, e não pelo objeto. Isso quer dizer que não importa quantos objetos tenham desta mesma classe, o valor estático será o mesmo para todos, e um que modifique este valor, modificará também do resto. 
    /*Sintaxe da chamada: self::$numeroFuncionariosOcupados;
    Serve como uma variável comum, pode ter adições, lógica envolvida, tudo, contanto que no objetivo certo de manter o valor para a classe inteirina*/

    // public function ArrayPush(Array $array){
        
    //      echo '<pre>';
    //         print_r($array);
    //         print_r($this->array2);
    //         echo '</pre>';
    // }

}


?>