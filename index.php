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
        $sql = "SELECT * FROM pub WHERE id LIKE '%$data%' or mes LIKE '%$data%' or leitor LIKE '%$data%' or orador LIKE '%$data%' or dirigente LIKE '%$data%' or presid LIKE '%$data%' or tema LIKE '%$data%' ORDER BY id DESC";

        
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
        body{
            background-image: linear-gradient(to right, rgb(20, 47, 220), rgb(37, 177, 49));
            font-family: Arial, Helvetica, sans-serif;
            color: white;
           
    
        }
        .navbar{
            padding-left: 600px;
            
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <div class="container-fluid ">
    <a class="navbar-brand fs-3" href="">Painel de Programação</a>
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
<input type="search" class="form-control w-25" placeholder="Pesquisar..." id="pesquisar" autofocus>
<button onclick ="searchData()" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>

</div>

<!-- termina a pesquisa -->
<div class="m-5">
    <!-- tabela de dados -->
<div class="table-responsive">
    <table class="table  text-light fs-6 caption-top table-sm align-middle  table-bordered">
    <thead class="text-light fs-5 bg-primary text-center">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Mês</th>
        <th scope="col">Data</th>
        <th scope="col">Presidente</th>
        <th scope="col">Orador</th>
        <th scope="col">Tema</th>
        <th scope="col">Dirigente</th>
        <th scope="col">Leitor</th>
        <th scope="col">Opções</th>
        <th scope="col" >
        <a href="cad.php" class ="adicionar">
        <svg xmlns='http://www.w3.org/2000/svg' width='30' height='25' fill='text-primary' class='bi bi-plus-circle-fill' viewBox='0 0 17 16'>
  <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z'/>
</svg>
        </a>
        
        </th>
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
            echo "<td>

            <a class='btn btn-sm btn-primary  ms-4' href='editar.php?id=$dados[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' 
            class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg>
            </a>
            <a class='btn btn-sm btn-danger' href='delete.php?id=$dados[id]'>
           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
           <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
         </svg>
         </a>
         <a class='btn btn-sm btn-success' href='impressao.php?id=$dados[id]'>
         <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-pdf-fill' viewBox='0 0 16 16'>
         
        <path d='M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z'/>
        <path fill-rule='evenodd' d='M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z'/>
        </svg>
         </a>
            </td>";
            echo "</tr>";
            

        }
        
    ?>
       
    </tbody>
    <caption class="text-center text-light fs-5"><b>PROGRAMAÇÃO DE FINAL DE SEMANA</b></caption>
    </table>
    </div>
    
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
    window.location ='index.php?search=' + search.value;


 }

</script>
</html>