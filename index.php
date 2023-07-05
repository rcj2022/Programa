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

    <form action="">
        <fieldset>
            <legend><b>Cadastro de Programação de fim de semana</b></legend>
            <br>
            <div class ="inputData">
            <label for="data" class="dataLabel">Data:</label> 
            <input type="date" name="data" id="data" placeholder="Digite a data..." class="data">
            </div>
            <br>
            <div class ="inputPre">
            <label for="presidente">Presidente:</label> 
            <input type="text" name="presidente" id="presidente" placeholder="Digite o nome do presidente..." class ="presid" autofocus>
            </div>

            <br>
            <div class ="inputOrac">
            <label for="orador" class="LabelOrador">Orador:</label> 
            <input type="text" name="orador" id="orador" placeholder="Digite o nome do orador..." class ="orac">
            </div>
            
            <br>
            <div class ="inputTema">
            <label for="orador" class="LabelTema">Tema:</label> 
            <input type="text" name="tema" id="Tema" placeholder="Digite o tema do discurso..." class ="tema">
            </div>
            <hr>
                <h4>Estudo de A Sentinela</h4>
        </fieldset>
        <br>
        <input type="submit" value="Cadastrar" class="botao">
    </form>

</div>
    
</body>
</html>