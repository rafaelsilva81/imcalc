<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculador_IMC</title>
</head>
<body>
  <h1>Calcular_IMC</h1>
  <form id="imc-form">
    <input name="peso" type="text" placeholder="Digite o peso">
    <input name="altura" type="text" placeholder="Digite a altura">
    <button type="submit" onclick="submitFormImc(event)">Calcular IMC</button>
  </form>

  <span id="result"> </span>


</body>
</html>

<?php

// $peso = $_POST['peso'];
// $altura = $_POST['altura'];



// $altura = $altura * $altura;
// $IMC = $peso / $altura;


// function returnData() {
//   if($IMC<18.5){
//     echo "Abaixo do peso";
//     echo "Sinal de alerta! A sua saúde e rotina alimentar pode não estar boa o suficiente. Procure um
//     médico para realização de exames. ";
//   }if(($IMC>=18.5) && ($IMC<=24.9)){
//     echo "Eutrófico";
//     echo "Parabéns! Está com o peso ideal. Continue se alimentando com qualidade e praticando
//     exercícios físicos. Busque orientação de um Personal trainer e um nutricionista caso queira
//     melhorar sua performance e sua estética. ";
//   } if(($IMC>=25) && ($IMC<=29.9)){
//     echo "Sobrepeso";
//     echo "Cuidado heim!
//     Você está um pouco acima do peso ideal. Procure melhorar seus hábitos para que não piore a
//     situação. Uma alimentação e treinos equilibrados ajudará você a melhorar sua condição física
//     e atingir o peso ideal.";
//   } if(($IMC>=30) && ($IMC<=34.9)){
//     echo "Obesidade Grau I";
//     echo "Sinal de alerta!!! Você está exposto a diversas doenças. Procure melhorar seus hábitos,
//     praticar exercícios físicos e se alimentar com qualidade, assim, poderá sair dessa perigosa que
//     é a obesidade.";
//   } if(($IMC>=35) && ($IMC<=39.9)){
//     echo "Obesidade Grau II";
//     echo "Perigo!!! Você está exposto a diversas doenças graves. Busque orientação multiprofissional
//     para sair dessa condição!
//     Exercícios físicos na dose certa, alimentação equilibrada e reeducação comportamental é
//     indispensável para você neste momento. ";
//   } if($IMC>=40){
//     echo "Obesidade Grau III";
//     echo "Alerta máximo!!!
//     Você está exposto a diversas doenças graves e corre risco de vida!!! Busque orientação
//     multiprofissional para sair dessa condição perigosa!
//     Exercícios físicos na dose certa, alimentação equilibrada e reeducação comportamental é
//     indispensável para você neste momento.
//     Valores acima resulta no alto risco para obter doenças cardiovasculares e hipertensão arterial. ";
//   }

// }
// returnData();


?>