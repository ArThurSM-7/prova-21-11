<!DOCTYPE html>
<?php
include "../inc/conectabd.inc.php";

function recupera_curso($id){
    global $link;

    $query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso WHERE id_curso = $id;";
    if ($result = mysqli_query($link, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
        mysqli_free_result($result);
    }
}

$id = isset($_GET["id"]) ? $_GET["id"] : null;
$al = recupera_curso($id);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar curso</title>
</head>
<body>
    <h1>Atualizar curso</h1>
    <form action