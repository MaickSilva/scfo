<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle Financeiro Orçamentário</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- Formatação de textos -->
    <script>
        function formatar(mascara, documento){
          var i = documento.value.length;
          var saida = mascara.substring(0,1);
          var texto = mascara.substring(i)
          
          if (texto.substring(0,1) != saida){
                    documento.value += texto.substring(0,1);
          }
          
        }
    </script>
</head>

<body>