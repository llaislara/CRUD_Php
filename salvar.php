<?php
	include("config.php");
    var_dump($_REQUEST);
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO pessoas 
						(nome, cpf, data_nascimento, rg, orgao_emissor)
					VALUES
						('".$_POST["nome"]."','".$_POST["cpf"]."','".$_POST["data_nascimento"]."','".$_POST["rg"]."','".$_POST["orgao_emissor"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE pessoas SET
						nome='".$_POST["nome"]."',
						cpf='".$_POST["cpf"]."',
                        data_nascimento='".$_POST["data_nascimento"]."',
                        rg='".$_POST["rg"]."',
                        orgao_emissor='".$_POST["orgao_emissor"]."'						
					WHERE
						id=".$_POST["id"];

            echo ($sql);           
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM pessoas WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='usuarios.php';</script>";
			}
			break;
	}
?>