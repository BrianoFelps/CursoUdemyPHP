<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laços de repetição -> do, dowhile, for, foreach</title>
    </head>
    <body>
        <?php

            $num = 0;

            echo "
            <hr> 
            <span style='display:inline'>WHILE</span><br><br>
            ";

            while($num < 10){
                $num++; //critério de parada

                if($num == 2 or $num == 6) continue; 
                /* Pula a instrução atual com base no if.
                Tomar cuidado de não colocar sem o critério de parada, para evitar
                bugs */

                echo "$num <br>";
            }

            echo "
            <hr> 
            <span style='display:inline'>DO WHILE</span><br><br>
            ";

            do {
                echo "Olá mundo!!!</br>"; //roda o do{} pelo menos uma vez, de modo que a verificação ocorra a partir da segunda.
                $num++;
                if($num == 20){
                    break; //critério de parada
                }
            } while($num < 10); //false

            echo "
            <hr> 
            <span style='display:inline'>FOR</span><br><br>
            ";

            for($i= 1; $i <= 12; $i++){
                
                if($i !== 12){
                    echo "$i, ";
                } else{
                    echo "$i";
                }
            }

            echo "
            <hr> 
            <span style='display:inline'>FOREACH</span><br><br>
            ";

            $Maçãs = ['Gala', 'Fuji', 'Argentina vermelha', 'Argentina verde'];

            //O laço foreach(), especializado em arrays, espera a passagem de uma array por parâmetro, e depois a sintaxe "as $indiceDeCadaItem => $variavelDeCadaItem.
            /*foreach ($variable as $key => $value) {
                # code...
            }*/

            $éTerça= true;

            foreach ($Maçãs as $indice => $maçã) {
                echo "$maçã";

                if($éTerça and $maçã !== 'Argentina verde') echo ', 30% de desconto nas terças!';

                echo '<br>';
            }
            echo '<br>';
            echo '<br>';

            function DNA_strand($dna) {
    
                $dna = str_split($dna);
                
                for($i = 0; $i < count($dna); $i++){
                    if($dna[$i] === 'A'){
                        $dna[$i] = 'T';
                    } else if ($dna[$i] === 'T'){
                        $dna[$i] = 'A';
                    } else if($dna[$i] === 'C'){
                        $dna[$i] = 'G';
                    } else if ($dna[$i] === 'G'){
                        $dna[$i] ='C';
                    }
                }
                
                $dna = implode('', $dna);
                return $dna;
            }

            echo DNA_strand("TTTT");
        ?>
    </body>
</html>