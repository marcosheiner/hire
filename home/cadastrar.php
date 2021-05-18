<?php 

include_once '../config/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../home/index.php");
}


if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$csenha = md5($_POST['csenha']);

	if ($senha == $csenha) {
		$sql = "SELECT * FROM user_hire WHERE email_user='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user_hire (fullname, username, email_user, password_user)
					VALUES ('$fullname', '$username', '$email', '$senha')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$user_cad_err = 'Usuário Cadastrado com Sucesso!';
                $fullname = "";
				$username = "";
				$email = "";
				$_POST['senha'] = "";
				$_POST['csenha'] = "";
			} else {
				$cadastro_err = 'Erro ao Cadastrar! Tente novamente.';
			}
		} else {
			$email_err = 'E-mail já cadastrado!';
		}
		
	} else {
		$senha_err = 'A senha não bate!';
	}
}

?>

<?php include '../includes/menu.php' ?>
    <br>
    <div class="container">
        <div class="flexbox">
            <div class="flex-item shadow">
                <h2 class="title-login">Cadastrar.</h2>
                <form action="" method="post">
                    <span class="help-block" style="color: black;"><small><?php echo $cadastro_err;?></small></span>
                    <span class="help-block" style="color: black;"><small><?php echo $user_cad_err;?></small></span>
                    <div class="form-group">
                        <label for="">Nome Completo:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nome de Usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                        <span class="help-block" style="color: black;"><small><?php echo $email_err;?></small></span>
                    </div>
                    <div class="form-group">
                        <label for="">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $_POST['senha']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Confirmar Senha:</label>
                        <input type="password" class="form-control" id="csenha" name="csenha" value="<?php echo $_POST['csenha']; ?>" required>
                        <span class="help-block" style="color: black;"><small><?php echo $senha_err;?></small></span>
                    </div>
                    
                    <button name="submit" class="btn btn-login">Cadastrar</button>
                </form>
                <br>
                <div class="text-center">
                    <a href="../home/index.php">Já tenho uma conta!</a>
                </div>
            </div>
        </div>
    </div>



<?php include '../includes/footer.php' ?>