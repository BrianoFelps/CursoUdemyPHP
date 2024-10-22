<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /* Por padrão, o normal é definir o 
            timezone no arquivo de config do PHP, 
            mas depende do acesso ao PHP.ini. 
            Veja os timezones em 
            https://www.php.net/manual/en/timezones.others.php */
            // O horário padrão do Brasil seria também o GMT-3, mas está estranho.
            date_default_timezone_set('Brazil/East');

            // Recuperação da data corrente com formatação incluída
            echo date("d/m/Y"). '</br>';
            echo date("D/M/Y"). '</br>';
            // Ver parametros em https://www.php.net/manual/en/datetime.format.php
            echo date("l/F/Y  G:i:s  e"). '</br>';

            // mesma coisa que a letra 'e' lá em cima: date_default_timezone_get()

            /*
            ********************************************************* 
            CALCULAR DATAS 
            *********************************************************
            */

            /*
                A função a ser usada a seguir converte uma string com uma data em
                formato americano (AAAA-MM-DD) em quantidade de segundos entre a 
                data de início do timestamp UNIX (01/01/1970) e a data requisitada.
                Desse modo, obtém-se um número em segundos que pode ser calculado
                com outro, realizando o cálculo de datas desejado. Para mostrar um 
                retorno que faça sentido, é preciso converter os segundos em dias,
                meses, anos, ou o desejado.
            */

            echo '<hr/>';
            $data1 = '2024/02/21';
            $data2 = '2006/02/21';
            $dataConvertida1 = strtotime($data1); 
            echo $dataConvertida1 . '</br>';
            $dataConvertida2 = strtotime($data2);
            echo $dataConvertida2 . '</br>';

            $calculoSemConversao = $dataConvertida1 - $dataConvertida2;

            echo $calculoSemConversao . '</br></br>' ;
            //Conversão em anos, eu poderia fazer de outra forma, mas converti aos poucos
            // $dataConvertida1 = round((((($dataConvertida1/60)/60)/24)/30)/12);
            // $dataConvertida2 = round((((($dataConvertida2/60)/60)/24)/30)/12);
            // echo $dataConvertida1 . "</br>";
            // echo $dataConvertida2 . "</br>";

            $calculoConvertido = round(((($calculoSemConversao/60)/60)/24)/365);

            //Minha idade
            echo $calculoConvertido . " ANOS. </br>";

            echo '<hr/>';
            // ****** Usando o date_diff (PHP7) ******
            $dataA = date_create($data1);
            $dataB = date_create($data2);

            $diferençaDatas = date_diff($dataA, $dataB);

            $dias = $diferençaDatas->format('%a');
            $anosCompletos = round($dias/365);

            echo $anosCompletos . " anos";
            
        ?>
    </body>
</html>