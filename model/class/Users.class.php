<?php 
	
	class Users extends Conexao{

		public function setLogged($email, $password){
			$pdo = parent::get_instance();
			$sql = "SELECT * FROM users WHERE email = :email AND password = :password";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":password", $password);
			$sql->execute();

				if($sql->rowCount() > 0){
					$sql = $sql->fetch();
					$id = $sql['id'];

					$_SESSION['user'] = $id;

					header("location: ../view/template.php?access=login_success");
				}else{
					echo "<script> alert('Email E/Ou Senha Incorretos.');</script>";
					echo "<script> window.location.href = '../index.php' </script>";
					exit;
				}
		}

		public function logout(){
			unset($_SESSION['user']);
		}
	}

 ?>