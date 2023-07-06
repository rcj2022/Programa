
<?php

if(!empty($_GET['id']))
{

include_once('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM pub WHERE id = $id";

$result = $con->query($sqlSelect);

if ($result->num_rows > 0) 
{
    while($dados = mysqli_fetch_assoc($result))
    {
        $mes = $dados['mes'];
        $dataReg = $dados['dataReg'];
        $presid = $dados['presid'];
        $orador = $dados['orador'];
        $tema = $dados['tema'];
        $dirigente = $dados['dirigente'];
        $leitor = $dados['leitor'];
        $orac = $dados['orador'];

    }

}
else
{
    header('Location: index.php');

}


}
else
{
    header('Location: index.php');
}




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Programação</title>
</head>
    <style>
        #update{
            width: 200px;
            margin-left: 210px;
            padding: 15px;
            color: white;
            background-color: blue;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            border-radius: 15px;
            font-size: 13pt;
        }
        legend{
        border: 2px solid gray;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 5px;
    }
    fieldset{
        border: 2px solid gray;
    }
</style>
<body>
<div class="box">

    <form action="update.php" method="POST">
        <fieldset>
            <legend><b>Atualização de Programação de fim de semana</b></legend>
            <br>
            <div class ="inputMes">
            <label for="mes" class="LabelMes">Mês:</label> 
            <input type="text" name="mes" id="mes" placeholder="Digite o mês..." class="mes" value="<?php echo $mes ?>" autofocus required>
            </div>
            <br>
            <div class ="inputData">
            <label for="dataReg" class="dataLabel">Data:</label> 
            <input type="date" name="dataReg" id="dataReg" placeholder="Digite a data..." value="<?php echo $dataReg ?>"class="data">
            </div>
            <br>
            <div class ="inputPre">
            <label for="presidente">Presidente:</label> 
            <input type="text" name="presidente" id="presidente" placeholder="Digite o nome do presidente..." class ="presid" value="<?php echo $presid ?>" >
            </div>

            <br>
            <div class ="inputOrac">
            <label for="orador" class="LabelOrador">Orador:</label> 
            <input type="text" name="orador" id="orador" placeholder="Digite o nome do orador..." class ="orac" value="<?php echo $orador ?>">
            </div>
            
            <br>
            <div class ="inputTema">
            <label for="tema" class="LabelTema">Tema:</label> 
            <input type="text" name="tema" id="Tema" placeholder="Digite o tema do discurso..." value="<?php echo $tema ?>" class ="tema">
            </div>
            <hr>
                <h4>Estudo de A Sentinela</h4>
            <hr>    
            <div class ="inputDirigente">
            <label for="dirigente" class="LabelDirigente">Dirigente:</label> 
            <input type="text" name="dirigente" id="dirigente" placeholder="Digite o nome do dirigente..." value="<?php echo $dirigente ?>" class ="dirigente">
            </div>
            <br>
            <div class ="inputLeitor">
            <label for="leitor" class="LabelLeitor">Leitor:</label> 
            <input type="text" name="leitor" id="leitor" placeholder="Digite o nome do leitor..." value="<?php echo $leitor ?>"class ="leitor">
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Atualizar" name="update" id="update" class="atualizar">
        </fieldset>
        <br>
       
    </form>

</div>
</body>
</html>