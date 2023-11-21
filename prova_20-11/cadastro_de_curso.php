<html lang="pt-br">
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
			Curso:
			</label>
			<select name="ds_curso" id="id_curso">
				<option value="Ánalise e desenvolvimento de sistemas">Ánalise e desenvolvimento de sistemas</option>
				<option value="Gestão de recursos humanos">Gestão de recursos humanos</option>
				<option value="Gestão comercial">Gestão comercial</option>
				<option value="Marketing">Marketing</option>
			</select>
			<br>
            <label for="id_curso">
			Carga horária:
			</label> 
			<input type="number" name="nr_carga_horaria" id="carga_horaria">
			Data do curso:
			</label> 
			<input type="datetime" name="dt_inicio" id="inicio">
			<?php
                          include_once "../inc/conectabd.inc.php";
                          include "../inc/funcoes.inc.php";
                          
                          
                        ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>