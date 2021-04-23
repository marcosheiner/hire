<?php include '../includes/menu.php' ?>
    <br>
    <div class="container">
        <div class="flexbox">
            <div class="flex-item shadow">
                <h2 class="title-login">Cadastrar.</h2>
                <form>
                    <div class="form-group">
                        <label for="">Seu Nome:</label>
                        <input type="text" class="form-control" name="" require>
                    </div>
                    <div class="form-group">
                        <label for="">Nome de Usuário:</label>
                        <input type="text" class="form-control" name="" require>
                    </div>
                    <div class="form-group">
                        <label for="">E-mail:</label>
                        <input type="email" class="form-control" name="" require>
                    </div>
                    <div class="form-group">
                        <label for="">Senha:</label>
                        <input type="password" class="form-control" name="" require>
                    </div>
                    <div class="form-group">
                        <label for="">Confirmar Senha:</label>
                        <input type="password" class="form-control" name="" require>
                    </div>
                    
                    <input type="submit" class="btn btn-login" value="Cadastrar"></input>
                </form>
                <br>
                <div class="text-center">
                    <a href="../pages/home.php">Já tenho uma conta!</a>
                </div>
            </div>
        </div>
    </div>


<?php include '../includes/footer.php' ?>