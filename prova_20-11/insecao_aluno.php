<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html lang="pt-br">
	<head>
	  <title>Cadastro de aluno - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 

  $curso = $_GET["ds_curso"];
  $carga = $_GET["nr_carga_horaria"];
  $date = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";
  $query = "INSERT INTO tb_curso 
            (ds_curso,nr_carga_horaria,dt_inicio)
	    VALUES
            ('$curso',$carga,$date)";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver alunos cadastrados</a>
 
 </body>
</html>