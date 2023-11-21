<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	  </head>
	<body>

	<?php   

  include_once "../inc/conectabd.inc.php";

  echo "<h1>Cursos Cadastrados</h1>";
  
 
  $query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso;";
  if ($result = mysqli_query($id_curso,$dt_inicio, $query)) {
	  echo "<table border='1' class='tabela'>";
	  echo '<tr><th>id</th><th>Descrição</th><th>Carga Horária</th><th>Dt.Início</th><th colspan="2">Ações</th></tr>';
	
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                  $nr_carga_horaria = $row["nr_carga_horaria"];
                  $dt_inicio = $row["dt_inicio"];
                  
		  echo "<tr>";
		  echo "<td>" . $id . "</td>";
		  echo "<td>" . $curso . "</td>";
                  echo "<td>" . $nr_carga_horaria . "</td>";
                  echo "<td>" . $dt_inicio . "</td>";
		  
		  echo '<td><a href="exclusao_curso.php?id='. $row["id_curso"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="form_alteracao_curso.php?id='. $row["id_curso"] . '&curso='.urlencode($curso).'">Alterar</a></td>';
		  
		  echo "</tr>";
		  
	  }
	  echo "</table>";
	  
	  mysqli_free_result($result);
  }
  
  mysqli_close($link);
?>  
	<br>
	<a href="cadastro_curso.php">Cadastrar novo curso</a>
	<br>
	<a href="../index.html">Menu Principal</a> 
	<style>  
	.tabela, th, td{
    border-collapse:collapse;
    padding: 10px;
    text-align: left;
     }
	 </style>
	</body>
</html>