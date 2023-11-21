<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro de aluno - Alteração</title>
    <meta charset="utf-8">
</head>
<body>
<?php 
    include_once "../inc/conectabd.inc.php";

    $id_curso = isset($_GET["id_curso"]) ? $_GET["id_curso"] : null;
    $ds_curso = isset($_GET["ds_curso"]) ? $_GET["ds_curso"] : null;
    $nr_carga = isset($_GET["nr_carga_horaria"]) ? $_GET["nr_carga_horaria"] : null;
    $dt_inicio = isset($_GET["dt_inicio"]) ? $_GET["dt_inicio"] : null;

    if ($id_curso !== null && $ds_curso !== null && $nr_carga !== null) {
        $query = "UPDATE tb_curso
                SET ds_curso = '$ds_curso',
                    nr_carga_horaria = $nr_carga,
                    dt_inicio = '$dt_inicio'
                WHERE id_curso = $id_curso;";

        if ($result = mysqli_query($link, $query)) {
            echo "Alteração efetuada com sucesso";
        } else {
            echo "Erro na alteração: " . mysqli_error($link);
        }
    } else {
        echo "Parâmetros inválidos.";
    }
  
    
    mysqli_close($link);
?>  
<br>
<a href="consulta_curso.php">Ver cursos cadastrados</a>
</body>
</html>
