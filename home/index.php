<?php 

include_once '../config/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../pages/dashboard.php");
}


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT * FROM user_hire WHERE email_user='$email' AND password_user='$senha'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../pages/dashboard.php");
	} else {
		$login_err =  'E-mail ou Senha está errado.';
	}
}

?>

<?php include '../includes/menu.php' ?>
    
    
<div class="background-home">
    <div class="container">
        <div class="flexbox">
            <div class="flex-item shadow">
                <h2 class="title-login">Hire.</h2>
                <form action="" method="POST">
                <span class="help-block" style="color: black;"><small><?php echo $login_err;?></small></span>
                    <div class="form-group">
                        <label for="">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    
                    <button name="submit" class="btn btn-login">Entrar</button>
                </form>
                <br>
                <div class="text-center">
                    <a href="../home/cadastrar.php">Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-home">
    <div class="text-center">
        <small>Copyright ® 2021 Hire Todos os direitos reservados</small>
    </div>
</footer>
    
    
<?php include '../includes/footer.php' ?>