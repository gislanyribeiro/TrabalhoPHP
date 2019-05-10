<?php
$numero=$_POST['n'];
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$nota=$_POST['nota'];
include_once("conexao.php");
$sql="UPDATE ALUNO SET NOME='$nome',SEXO='$sexo' WHERE NUMERO=$numero";
$r=mysqli_query($con,$sql);
if($r){
	echo "Dados cadastrados com sucesso";

}else{
	echo "Erro ao cadastrar";
}
