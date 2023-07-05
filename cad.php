<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$mes = $_POST['mes'];
$dataReg = $_POST['data'];
$presid = $_POST['presidente'];
$orador = $_POST['orador'];
$tema = $_POST['tema'];
$dirigente = $_POST['dirigente'];
$leitor = $_POST['leitor'];
$orac = $_POST['orador'];


$result = mysqli_query($con,"INSERT INTO pub(mes, dataReg, presid, orador, tema, dirigente, leitor, orac) VALUES('$mes','$dataReg', '$presid', '$orador', '$tema','$dirigente', '$leitor', '$orac')");
header('Location: index.php');
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <title>Home</title>
   
  </head>
<body>

<div class="box">

    <form action="cad.php" method="POST">
        <fieldset>
            <legend><b>Cadastro de Programação de fim de semana</b></legend>
            <br>
            <div class ="inputMes">
            <label for="mes" class="LabelMes">Mês:</label> 
            <input type="text" name="mes" id="mes" placeholder="Digite o mês..." class="mes" autofocus required>
            </div>
            <br>
            <div class ="inputData">
            <label for="data" class="dataLabel">Data:</label> 
            <input type="date" name="data" id="data" placeholder="Digite a data..." class="data">
            </div>
            <br>
            <div class ="inputPre">
            <label for="presidente">Presidente:</label> 
            <input type="text" name="presidente" id="presidente" placeholder="Digite o nome do presidente..." class ="presid" >
            </div>

            <br>
            <div class ="inputOrac">
            <label for="orador" class="LabelOrador">Orador:</label> 
            <input type="text" name="orador" id="orador" placeholder="Digite o nome do orador..." class ="orac">
            </div>
            
            <br>
            <div class ="inputTema">
            <label for="tema" class="LabelTema">Tema:</label> 
            <input type="text" name="tema" id="Tema" placeholder="Digite o tema do discurso..." class ="tema">
            </div>
            <hr>
                <h4>Estudo de A Sentinela</h4>
            <hr>    
            <div class ="inputDirigente">
            <label for="dirigente" class="LabelDirigente">Dirigente:</label> 
            <input type="text" name="dirigente" id="dirigente" placeholder="Digite o nome do dirigente..." class ="dirigente">
            </div>
            <br>
            <div class ="inputLeitor">
            <label for="leitor" class="LabelLeitor">Leitor:</label> 
            <input type="text" name="leitor" id="leitor" placeholder="Digite o nome do leitor..." class ="leitor">
            </div>
            <br>
            <input type="submit" value="Cadastrar" name="submit" id="submit" class="botao">
        </fieldset>
        <br>
       
    </form>

</div>
    
</body>
</html>