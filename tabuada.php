﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
    <?php    
      //Obtendo valores do formulário dinamicamente
      foreach ($_POST as $chave => $valor)
        $$chave = $valor;    
    ?>
  </head>
  <body>
    <?php      
      //Montando a(s) tabela(s)
      for ($i = $tabuadaInicio; $i <= $tabuadaFim; $i++) {
        if($i==0 || $j==0)
		{
			$f="N/A";
		}else{
			$f=$i/$j;
			$f=round ($f,2);
		}
		
		
        echo "<div class='tabuada'>" .
             "<table border='1'>".
             "  <caption>Tabuada</caption>" .
             "  <thead>" .
             "  <tr>" .
             "    <th>Multiplicar</th>" .
			 "    <th>Dividir</th>" .
			 "    <th>Soma</th>" .
			 "    <th>Subtração</th>" .
             "  </tr>" .             
             "  </thead>" .
             "  <tbody>" ;
             
        for ($j = $numeroInicio; $j <= $numeroFim; $j++) {
          
          echo "<tr>" . 
               "  <td>"  . $i . "*" . $j ."=" . ($i * $j) . "</td>" .
			   
			   "  <td>"  . $i . "/" . $j ."=" . $f. "</td>" .
               			  
               "  <td> " . $i . "+" . $j ."=" . ($i + $j) . "</td>" .
			   
               "  <td>" . $i . "-" . $j ."=" . ($i - $j) . "</td>" .
               "</tr>";          
        } 


        echo "  </tbody>" .
             " </table>" .
             " </div>";
      }
      
    ?>
  </body>
</html>