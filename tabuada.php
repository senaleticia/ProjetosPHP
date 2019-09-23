<?php
    $tabuada = (integer) 0;
    $contador = (integer) 0;
    $resultado = (string) "";
    $inicio = (integer) 1;

    if(isset($_POST["btn-calcular"])){
        //Resgatando os valores 
        $tabuada = $_POST["txt-tabuada"];
        $contador = $_POST["txt-contador"];

            for ($inicio = 1; $inicio <= $contador; $inicio++){
            $resultado.= $tabuada. "x". $inicio. "=". $tabuada * $inicio . "<br>";
        }

    }
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tabuada</title>
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <body>
        <div id="caixa-menu">
            <div id="icone-menu">
                <ul id="menu">
                    <li class="itens-menu">Média</li>
                    <li class="itens-menu">Calculadora</li>
                    <li class="itens-menu">Tabuada</li>
                    <li class="itens-menu">Pares e Ímpares</li>
                </ul>
            </div>
        </div>
        <div id="caixa-tabuada">
            <form action="tabuada.php" method="post" name="frm-tabuada">
                <h1>Tabuada</h1>
                <p>Tabuada:   <input type="text" name="txt-tabuada" value="<?=$tabuada?>"></p>
                <p>Contador:  <input type="text" name="txt-contador" value="<?=$contador?>"></p>
                <button class="botao" type="submit" name="btn-calcular">Calcular</button><br>
                <div id="caixa-resultado"><?=$resultado?></div>
            </form>
        </div>
    </body>
</html>