<?php
    $par = (integer) 0;
    $impar = (integer) 0;
    $valor1 = (integer) 0;
    $valor2 = (integer) 0;

    if(isset($_POST["btn-calcular"])){
        //Restagando os valores
        $valor1 = $_POST["slt-num-inicial"];
        $valor2 = $_POST["slt-num-final"];
        
        /*for($cont = $valor1; $cont <= $valor2; $cont++){
            if($cont % 2 == 0){
                $par .= $valor1 
            }else if($cont % 2 != 0){
                $impar
            }
        }*/
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Pares e Ímpares</title>
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <body>
        <div id="caixa-menu">
            <div id="icone-menu">
                <ul id="menu">
                    <li class="itens-menu">Média</li>
                    <li class="itens-menu"><a href="calculadora_simples.php">Calculadora</a></li>
                    <li class="itens-menu"><a href="tabuada.php">Tabuada</a></li>
                    <li class="itens-menu">Pares e Ímpares</li>
                </ul>
            </div>
        </div>
        <div id="caixa-pares-e-impares">
            <h1>Pares e Ímpares</h1>
            <p>
                <select name="slt-num-inicial" id="num-inicial">
                    <option selected>Selecione um Número</option>
                    <?php
                        for($cont=0; $cont<=500; $cont++){
                            echo('<option value='.$cont.'>'.$cont.'</option>');
                        }
                    ?>
                </select>
            </p>
            <p>
                <select name="slt-num-final" id="num-final">
                    <option selected>Selecione um Número</option>
                    <?php
                        for($cont=100; $cont<=1000; $cont++){
                            echo('<option value='.$cont.'>'.$cont.'</option>');
                        }
                    ?>
                </select>
            </p>
            <button class="botao-dois" type="submit" name="btn-calcular">Calcular</button>
            <div id="teste">
                <div id="caixa-resultado-par"><??></div>
                <div id="caixa-resultado-impar"></div>
            </div>

            </div>
        </div>
    </body>
</html>