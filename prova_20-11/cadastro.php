<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Cadastro de curso - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php 
  $id = $_GET["id"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "delete from tb_curso where id_curso = $id;";
  if ($result = mysqli_query($link, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  
  mysqli_close($link,$dt_inicio);
  
 ?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>