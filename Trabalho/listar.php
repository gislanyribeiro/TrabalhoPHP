<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
</head>
<body>
	<table border="1px">
		<tr>
			<td>Nome</td>
			<td>N°</td>
			<td>Sexo</td>
			<td>Nota</td>
			<td>Editar</td>
			<td>Excluir</td>
		</tr>
	<?php 
	include_once('conexao.php');
	$sql="SELECT*FROM aluno";
	$r= mysqli_query($con,$sql);
	if ($r) {
		while ($result = mysqli_fetch_array($r)) { ?>
 
			
			<tr>
				<td><?php echo $result['numero']; ?></td>
				<td><?php echo $result['nome']; ?></td>
				<td><?php echo $result['sexo']; ?></td>
				<td><?php echo $result['nota']; ?></td>
				<td><a href="editar.php?n=<?php echo $result['numero'];?> &nome=<?php echo $result['nome'];?>&sexo=<?php echo $result['sexo'];?>&nota=<?php echo $result['nota'];?> "><img src="editar.png" width="20px" height="20px"></a></td>
				<td><a href="excluir.php?id=<?php  echo $result['numero'];?>"><img src="excluir.jpg" width="20px" height="20px"></a></td>
			</tr>
			<?php } }?>
	
	</table>

</body>
</html>