<?php

 $peso = $_GET['peso'];
 $altura = $_GET['altura'];

 $altura = $altura * $altura;
 $IMC = $peso / $altura;
 
 $result = new stdClass();

   if($IMC<18.5){
     $result->title = "Abaixo do peso";
     $result->desc = "Sinal de alerta! A sua saúde e rotina alimentar pode não estar boa o suficiente. Procure um
     médico para realização de exames. ";
   }if(($IMC>=18.5) && ($IMC<=24.9)){
     $result->title = "Eutrófico";
    $result->desc = "Parabéns! Está com o peso ideal. Continue se alimentando com qualidade e praticando
     exercícios físicos. Busque orientação de um Personal trainer e um nutricionista caso queira
     melhorar sua performance e sua estética. ";
   } if(($IMC>=25) && ($IMC<=29.9)){
     $result->title = "Sobrepeso";
    $result->desc = "Cuidado heim!
     Você está um pouco acima do peso ideal. Procure melhorar seus hábitos para que não piore a
     situação. Uma alimentação e treinos equilibrados ajudará você a melhorar sua condição física
     e atingir o peso ideal.";
   } if(($IMC>=30) && ($IMC<=34.9)){
     $result->title = "Obesidade Grau I";
    $result->desc = "Sinal de alerta!!! Você está exposto a diversas doenças. Procure melhorar seus hábitos,
     praticar exercícios físicos e se alimentar com qualidade, assim, poderá sair dessa perigosa que
     é a obesidade.";
   } if(($IMC>=35) && ($IMC<=39.9)){
     $result->title = "Obesidade Grau II";
     $result->desc ="Perigo!!! Você está exposto a diversas doenças graves. Busque orientação multiprofissional
     para sair dessa condição!
     Exercícios físicos na dose certa, alimentação equilibrada e reeducação comportamental é
     indispensável para você neste momento. ";
   } if($IMC>=40){
     $result->title ="Obesidade Grau III";
    $result->desc = "Alerta máximo!!!
     Você está exposto a diversas doenças graves e corre risco de vida!!! Busque orientação
     multiprofissional para sair dessa condição perigosa!
     Exercícios físicos na dose certa, alimentação equilibrada e reeducação comportamental é
     indispensável para você neste momento.
     Valores acima resulta no alto risco para obter doenças cardiovasculares e hipertensão arterial. ";
   }

   $resultJson = json_encode($result);

   echo $resultJson;

?>