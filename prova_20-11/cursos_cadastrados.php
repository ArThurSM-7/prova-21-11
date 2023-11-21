<!DOCTYPE html>
<style>
        input{
            margin : 4px;
            padding :2px;
        }
        input:hover{
            background-color : lightgray;
        }
    </style>
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
    <form action="alteracao_curso.php" method="GET">
        <input type="hidden" name="id_curso" value="<?php echo $al["id_curso"];?>">
        <label for="curso">Curso:</label>
        <select name="ds_curso" id="curso">
            <option value="Ánalise e desenvolvimento de sistemas">Ánalise e desenvolvimento de sistemas</option>
            <option value="Gestão de recursos humanos">Gestão de recursos humanos</option>
            <option value="Gestão comercial">Gestão comercial</option>
            <option value="Marketing">Marketing</option>
        </select>
        <br>
        <label for="carga_horaria">Carga horária:</label> 
        <input type="number" name="nr_carga_horaria" id="carga_horaria">
        <br>
        <label for="inicio">Data do curso:</label> 
        <input type="datetime" name="dt_inicio" id="inicio">
        <br>
        <input type="submit" value="OK">
    </form>
    
</body>
</html>