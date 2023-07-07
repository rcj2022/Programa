
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
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
    <title>Atualizar Programação</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts.js" defer></script>
    <script src="input.js" defer></script>
</head>
    <style>
        #update{
            width: 200px;
            margin-left: 0px;
            padding: 15px;
            color: white;
            background-color: red;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            border-radius: 15px;
            font-size: 13pt;
        }
        legend{
        border: 1px solid gray;
        padding: 10px;
        text-align: center;
        background-color: white;
        border-radius: 5px;
        font-size: 20pt;
    }
    fieldset{
        border: 1px solid black;
    }
    .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color:white;
    padding: 10px;
    width: 70%;  
}
h4{
    text-align: center;
    font-size: 15pt;
}

.padrao{
    width: 80%;
    padding: 5px;
   border: none;
    font-size: 15pt;
    text-decoration: underline;
}
.Labelpadrao{
    font-size: 15pt;
}
</style>
<body>
<div class="box" >

    <form id="content">
        <!-- <hr class="bg-dark"> -->
        <fieldset>
        <h4 class="p-2">PROGRAMAÇÃO MENSAL DE DISCURSOS</h3>
        </fieldset>
        <fieldset>
            <!-- <legend><b>Programação do mês corrente</b></legend> -->
            <br>
            <div class ="inputMes">
            <label for="mes" class="Labelpadrao">Mês:</label> 
            <input type="text" name="mes" id="mes" placeholder="Digite o mês..." class="padrao" value="<?php echo $mes ?>">
            </div>
            <br>
            <div class ="inputData">
            <label for="dataReg" class="Labelpadrao">Data:</label> 
            <input type="date" name="dataReg" id="dataReg" placeholder="Digite a data..." value="<?php echo $dataReg ?>"class="padrao">
            </div>
            <br>
            <div class ="inputPre">
            <label for="presidente" class="Labelpadrao">Presidente:</label> 
            <input type="text" name="presidente" id="presidente" placeholder="Digite o nome do presidente..." class ="padrao" value="<?php echo $presid ?>" >
            </div>

            <br>
            <div class ="inputOrac">
            <label for="orador" class="Labelpadrao">Orador:</label> 
            <input type="text" name="orador" id="orador" placeholder="Digite o nome do orador..." class ="padrao" value="<?php echo $orador ?>">
            </div>
            
            <br>
            <div class ="inputTema">
            <label for="tema" class="Labelpadrao">Tema:</label> 
            <input type="text" name="tema" id="tema" placeholder="Digite o tema do discurso..." value="<?php echo $tema ?>" class ="padrao">
            </div>
            <fieldset>
                <h4 class="p-2">ESTUDO DA REVISTA A SENTINELA</h4>
            </fieldset>   
            <div class ="inputDirigente">
            <label for="dirigente" class="Labelpadrao">Dirigente:</label> 
            <input type="text" name="dirigente" id="dirigente" placeholder="Digite o nome do dirigente..." value="<?php echo $dirigente ?>" class ="padrao">
            </div>
            <br>
            <div class ="inputLeitor">
            <label for="leitor" class="Labelpadrao">Leitor:</label> 
            <input type="text" name="leitor" id="leitor" placeholder="Digite o nome do leitor..." value="<?php echo $leitor ?>"class ="padrao">
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
        </fieldset>
        <br>
        <p>OBS: Aos leitores de <b>A Sentinela</b> sempre relembrando aos irmãos a preparação antecipada da leitura de A sentinela. Os leitores devem vez após vez ouvir o audio da leitura para que, com a leitura de vocês possam trazer honra e glória a Jeová.</p>
        <!-- <input type="submit" value="GerarPDF" name="update" id="update" class="atualizar"> -->
        
    </form>
    <button id="generate-pdf" class="btn btn btn-primary">Gerar Pdf</button>
    <a href="index.php" class="btn btn btn-danger">voltar</a>
</div>
</body>
</html>