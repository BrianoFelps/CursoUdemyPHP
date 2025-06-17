<?php
/*
passo 1 criar o arquivo (composer.json).
passo 2 criar pastas src, public e tests.
passo 3, jogar a pasta Classes pra src, e index.php pra public.
passo 4, criar um namespace App\Classes para os conteudos da pasta classes.
passo 5, mudar a sintaxe do require-once para o use:
use App\Classes\PedidoBolo;
use App\Classes\FormaDeBolo;
use App\Classes\Cliente;
passo 6, require_once __DIR__ . "/../vendor/autoload.php"; no index.php.
passo 7, acessar o php.ini e descomentar o extension=zip.
passo 8, usar composer install com o arquivo composer.json no terminal de comando.
*/
//__DIR__ retorna à raiz principal do repositório. Essa pasta vendor vai ser criada pelo composer


use App\Classes\PedidoBolo;
use App\Classes\FormaDeBolo;
use App\Classes\Cliente;

require_once __DIR__ . "/../vendor/autoload.php";

$maria = new Cliente("Maria", 21);
$joao = new Cliente("João", 26);
$jose = new Cliente("José", 45);

$bolo2 = new PedidoBolo($maria);

echo "<h3>Bolo 2:</h3>";


// echo $bolo2->formaBolo->adicionaIngredientes(["Adamantio", "Couro", "Ouro"]);
// echo $bolo2->formaBolo->removeIngredientes("Adamantio");
// echo $bolo2->formaBolo->fazerBolo();
echo $bolo2->formaBolo->colocarNoForno();

echo $bolo2->resumoPedido();

// echo '<pre>'; print_r($bolo2);

$bolo3 = new PedidoBolo($joao);

echo "<h3>Bolo 3:</h3>";

// echo $bolo2->formaBolo->transfereIngrediente("Ouro", $bolo3->formaBolo);

echo $bolo3->formaBolo->colocarNoForno();
echo $bolo3->resumoPedido();

// echo '<pre>'; print_r($bolo3);

// echo "<h3>Bolo 2 com transferência:</h3>";

// echo '<pre>'; print_r($bolo2);

$bolo4 = new PedidoBolo($jose);

echo "<h3>Bolo 4:</h3>";

echo $bolo4->formaBolo->colocarNoForno();
echo $bolo4->resumoPedido();

echo '<pre>'; print_r($bolo4);



?>