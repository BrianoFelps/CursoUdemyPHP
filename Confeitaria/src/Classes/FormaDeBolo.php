<?php
declare(strict_types=1);

namespace App\Classes;

class FormaDeBolo {
    private array $ingredientes = ["farinha", "leite", "ovos", "amor"];
    // public $ingredientes = [];
    private int $tempoForno = 1;
    private static $fornosEmUso = 0;
    // private int $fornosEmUso = 0;
    private int $fornosTotais = 2;

    public function InformacoesBolo (){

        if(!$this->validarIngredientes()) return;
        
        return "Ingredientes: " . implode(", ", $this->ingredientes) . ". <br/>Tempo de preparo: " . $this->tempoForno . " horas. <br>";
    }

    private function validarIngredientes(){
        if(empty($this->ingredientes)) {
            echo "Sem ingredientes para continuar! <br>";
            return false;
        }
        return true;
    }

    public function fazerBolo(){
        if(!$this->validarIngredientes()) return;

        $this->misturarIngredientes();
    }

    public function misturarIngredientes(){
        return "Misturando os ingredientes: " . implode(", ", $this->ingredientes) . ".<br>";
    }

    public function colocarNoForno(int $tempo = 2){
        if(!$this->validarIngredientes()) return;

        if(!$this->verificaDisponibilidadeForno()){
            echo "Não há fornos disponíveis! Fornos em uso: " . self::$fornosEmUso .  ". Quantidade total de fornos: " . $this->fornosTotais;
            return;
        }

        self::$fornosEmUso++;
        // $this->fornosEmUso++;

        $this->tempoForno = $tempo;

        return "Colocando bolo no forno. Tempo para ficar pronto: " . $this->tempoForno . " horas. Fornos em uso: " . self::$fornosEmUso . "<br>";
    }

    public function adicionaIngredientes($array = []){

        foreach ($array as $ingredienteNovo){
            array_push($this->ingredientes, $ingredienteNovo);
        }
        
        return "Nova lista de ingredientes após adição: " . implode(', ', $this->ingredientes) . ".<br>";
    }

    public function removeIngredientes(string $ingredienteRemover){

        $acharKey = array_search($ingredienteRemover, $this->ingredientes);

        if(empty($acharKey)){
            echo "O ingrediente que você quer remover não está na lista! <br>";
            return;
        }

        unset($this->ingredientes[$acharKey]);
        
        
        return "Nova lista de ingredientes após remoção: " . implode(', ', $this->ingredientes) . ".<br>";
    }

    public function transfereIngrediente(string $ingredienteTransferir, FormaDeBolo $boloAReceber){

        $acharKey = array_search($ingredienteTransferir, $this->ingredientes);

        if(empty($acharKey)){
            echo "O ingrediente que você quer transferir não está na lista! <br>";
            return;
        }

        $boloAReceber->adicionaIngredientes([$ingredienteTransferir]);
        unset($this->ingredientes[$acharKey]);
        
        
        return "O seguinte ingrediente foi enviado ao outro bolo: '{$ingredienteTransferir}'";
    }

    private function verificaDisponibilidadeForno(){
        if(self::$fornosEmUso >= $this->fornosTotais){
        // if($this->fornosEmUso >= $this->fornosTotais){
            return false;
        }
        return true;
    }

    private static function getQuantidadeFornosUso(){
        return self::$fornosEmUso;
    }
}

// $bolo1 = new FormaDeBolo();
// $bolo1->InformacoesBolo();
?>