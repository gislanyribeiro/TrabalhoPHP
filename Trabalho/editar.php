<!DOCTYPE html>
<html>
<head>
<style>#nomediv{
		background:orange;
	float: left;
		top:50%;
		left: 50%;
		font-size: 30px;
		margin-left: 650px;
	}
	#nomediv input{
		width: 90%;
		height: 20px;
		background: rgba(255,255,255,0.5);
	}

	#nomediv input[type='submit']{
		width: 100px;
		height: 40px;
		font-size: 20px;
}
	</style>
	<title></title>
</head>
<body bgcolor="purple">
<?php

$numero=$_GET['n'];
$nome=$_GET['nome'];
$sexo=$_GET['sexo'];
$nota=$_GET['nota'];

?>


<div id="nomediv" align="center">
<a href="listar.php">Listar</a>
<form action="atualizar.php" method="post">
<p>Editar o Aluno</p>
	N°:<input type="text" name="n" id="n" value="<?php echo $numero;  ?>"><br>
	Nome:<input type="tetx" name="nome" id="nome" value="<?php echo $nome; ?>"><br>
	       Sexo:<input type="radio" name="sexo" id="sexo" value="m" <?php echo ($sexo == 'm') ? 'checked' : null ?>>Masculino<br>
	<input type="radio" name="sexo" id="sexo" value="f" <?php echo ($sexo == 'f') ? 'checked' : null ?>>Masculino<br>
	Nota:<input type="text" name="nota" id="notas" value="<?php echo$nota?>">
	<input type="submit" value="enviar">
		
</form>

</div>
</body>
</html>
