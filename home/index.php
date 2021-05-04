

<?php require_once "../config/config.php";?>

<?php include '../includes/menu.php' ?>
    
    
<div class="background-home">
    <div class="container">
        <div class="flexbox">
            <div class="flex-item shadow">
                <h2 class="title-login">Hire.</h2>
                <form action="../routes/login.php" method="post">
                    <div class="form-group">
                        <label for="">Nome de Usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    
                    <input type="submit" class="btn btn-login" value="Entrar"></input>
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