<?php 
    //Permite configurar os padrões de regionalidade
    setlocale(LC_ALL, "pt-BR");
    /*  Tipos de dados
        int / integer - numeros inteiros
        float - numeros reais
        double - numeros reais com qtde maior de armazenamento
        string - caracter
        bool / boolean - true / false
        array - matriz de dados
        object - objeto
        
        Declaração de variaveis
        Ex: $variavel = (string) ""
        
        gettype() - retorna o tipo de dados de uma variavel
        Ex:gettype($variavel)
        
        settype() - converte um tipo de dados das variaveis
        Ex: settype($variavel,"integer")
    */

//Declaração de Variaveis
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (double) 0;
$operacao = (string) "";
$chkSomar = (string) "";
$chkSubtrair = (string) "";
$chkMultiplicar = (string) "";
$chkDividir = (string) "";

//Declaração das Constantes
define("ERR_EMPTY", "Por favor, digite todos os valores no formulário!");
define("ERR_CARACTER", "Por favor, digite apenas números nas caixas!");
define("ERR_DIV_ZERO", "Não é possível realizar a divisão por zero!");

/*echo(gettype($valor1));
settype($valor1,"string");
echo(gettype($valor1));*/

//Valida se o botão foi clicado
if(isset($_POST['btncalc']))
{
    //Resgatando valores fornecidos pelo usuário
    $valor1 = str_replace(",", ".", $_POST['txtn1']);
    $valor2 = str_replace(",", ".", $_POST['txtn2']);    

    /*strtoupper() - converte o conteudo para MAIUSCULO
    strtolower() - converte o conteudo para minusculo
    str_replace() - localiza o caracter e substitui por outro
    strtr() ou strchr() - localiza um caracter dentro de uma string*/

    if($valor1 == "" || $valor2 == "" || !isset($_POST['rdocalc']))
        echo(ERR_EMPTY);
    else if(!is_numeric($valor1) || !is_numeric($valor2)) 
        echo(ERR_CARACTER);
    
    else{
        $operacao = strtoupper($_POST['rdocalc']);
        
        if($operacao == "SOMAR"){
            $resultado = $valor1 + $valor2;
            $chkSomar = "checked";
        }else if($operacao == "SUBTRAIR"){
            $resultado = $valor1 - $valor2;
            $chkSubtrair = "checked";
        }else if($operacao == "MULTIPLICAR"){
            $resultado = $valor1 * $valor2;
            $chkMultiplicar = "checked";
        }else if($operacao == "DIVIDIR"){
            if($valor2 == 0){
                echo(ERR_DIV_ZERO);
            }else{
                $resultado = $valor1 / $valor2;
                $chkDividir = "checked";
            }
        }
    }
}

?>
<html>
    <head>
        <title>Calculadora - Simples</title>
        <style>
            
            #conteudo{
                width: 400px;
                height: 300px;
                margin-left: auto;
                margin-right: auto;
                border: solid 1px #000000;
                text-align: center;
               
            }
            
            #titulo{
                width: inherit;
                height: 80px;
                background-color: #000000;
                color: #ffffff;
                box-sizing: border-box;
                padding-top: 25px;
                font-size: 26px;
                font-family: verdana;
                word-spacing: 5px;
                letter-spacing: 3px;
            }
            
            #form{
                width: inherit;
                height: 185px;
                padding-top: 20px;
                box-sizing: border-box;
            }
            
            input{
                margin-bottom: 10px;
                margin-left: 10px;
            }
            
            #resultado{
                width: 200px;
                height: 137px;
                background-color: cornflowerblue;
                box-sizing: border-box;
                padding-top: 30px;
                font-family: cursive;
                font-size: 40px;
                font-weight: bold;
				float:right;
				
				
            }
			
			#container_opcoes{
				float:left;
				text-align:left;
			}
        
        </style>
    </head>
	<body>
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2?>" > <br>
						<div id="container_opcoes">

							<input type="radio" name="rdocalc" value="somar" <?=$chkSomar?>>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" <?=$chkSubtrair?>>Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$chkMultiplicar?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$chkDividir?>  >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >	
						</div>	
						<div id="resultado">
                            <?=round($resultado, "2")?>
                            <!-- round() - configura a quantidade de casas decimais na saída do valor -->
						</div>
				</form>
            </div>
        </div>
	</body>
</html>