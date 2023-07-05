<?php
    // session_start();
    include_once('config.php');
    // print_r($_SESSION);

    // if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    // {
    //     unset($_SESSION['email']);
    //     unset($_SESSION['senha']);

    //     header('Location: login.php');
    // }

    // $logado = $_SESSION['email'];

    if(!empty($_GET['search']))
    {

        $data = $_GET['search'];
        $sql = "SELECT * FROM pub WHERE id LIKE '%$data%' or mes LIKE '%$data%' or orac LIKE '%$data%' ORDER BY id DESC";

        
    }
    else
    {
       
        $sql = "SELECT * FROM pub order by id";
    }

   
    $result = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="stylesheet" href="index.css">
           
    <title>Sistema | RCJ</title>
    <style>
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Painel Administrativo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
</nav>
<br>

<br>
<!-- começa a pesquisa -->
<div class="box-search">
<input type="search" class="form-control w-25" placeholder="Pesquisar..." id="pesquisar">
<button onclick ="searchData()" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
<a href="cad.php"></a>
</div>

<!-- termina a pesquisa -->
<div class="m-5">
    <!-- tabela de dados -->

    <table class="table  text-light tab-bg">
    <thead class="text-light fs-5 bg-primary">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Mês</th>
        <th scope="col">Data</th>
        <th scope="col">Presidente</th>
        <th scope="col">Orador</th>
        <th scope="col">Tema</th>
        <th scope="col">Dirigente</th>
        <th scope="col">Leitor</th>
        <th scope="col">Oração</th>
        <th scope="col">Ações</th>

        </tr>
    </thead>
    <tbody>

    <?php
        while($dados = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$dados['id']."</td>";
            echo "<td>".$dados['mes']."</td>";
            echo "<td>".$dados['dataReg']."</td>";
            echo "<td>".$dados['presid']."</td>";
            echo "<td>".$dados['orador']."</td>";
            echo "<td>".$dados['tema']."</td>";
            echo "<td>".$dados['dirigente']."</td>";
            echo "<td>".$dados['leitor']."</td>";
            echo "<td>".$dados['orac']."</td>";
            echo "<td>";
         
            
            echo "</tr>";

        }
    ?>
       
    </tbody>
    </table>
</div>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
<script>

var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event){

    if(event.key==='Enter')
    {
        searchData();

    }

});

 function searchData()
 {
    window.location ='sistema.php?search=' + search.value;


 }

</script>
</html>