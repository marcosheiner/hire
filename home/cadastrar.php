

<?php require_once "../config/config.php";?>

<?php include '../includes/menu.php' ?>
    <br>
    <div class="container">
        <div class="flexbox">
            <div class="flex-item shadow">
                <h2 class="title-login">Cadastrar.</h2>
                <form action="../routes/register.php" method="post">
                    <div class="form-group">
                        <label for="">Nome Completo:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" require>
                    </div>
                    <div class="form-group">
                        <label for="">Nome de Usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" require>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" require>
                    </div>
                    <div class="form-group">
                        <label for="">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" require>
                    </div>
                    
                    <input type="submit" class="btn btn-login" value="Cadastrar"></input>
                </form>
                <br>
                <div class="text-center">
                    <a href="../home/index.php">Já tenho uma conta!</a>
                </div>
            </div>
        </div>
    </div>


<?php include '../includes/footer.php' ?>