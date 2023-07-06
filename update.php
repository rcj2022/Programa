<?php

include_once('config.php');

if (isset( $_POST['update'])) 
{
    $id = $_POST['id'];
    $mes = $_POST['mes'];
    $dataReg = $_POST['dataReg'];
    $presid = $_POST['presidente'];
    $orador = $_POST['orador'];
    $tema = $_POST['tema'];
    $dirigente = $_POST['dirigente'];
    $leitor = $_POST['leitor'];
    

    $sqlUpdate = "UPDATE pub SET mes = '$mes', dataReg = '$dataReg', presid = '$presid', orador = '$orador', tema = '$tema', dirigente = '$dirigente', leitor = '$leitor'  WHERE id = '$id'";

    $result = $con->query($sqlUpdate);

}

header('Location: index.php')

?>