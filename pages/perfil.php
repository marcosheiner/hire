<?php 
include_once '../config/config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../home/index.php");
}
    

?>

<?php include '../includes/menudashboard.php' ?>

    <div class="container" style="margin-top: 3em; margin-bottom: 3em;">

    <section>
        <div class="row">
            <div class="col-md-5">
                <div class="area-user shadow">
                    <span class="material-icons">person</span><h5 class="username"><?php echo $_SESSION['username']; ?></h5>
                    <hr class="linha-black">
                        <p class="label-perfil">Nome:</p>
                        <p>Marcos Heiner Lopes Brito</p>
                        <p class="label-perfil">E-mail:</p>
                        <p>marcosheiner2000@gmail.com</p>
                        <p class="label-perfil">Telefone:</p>
                        <p>(88) 98853-1646</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="area-user shadow">
                    <span class="material-icons">settings</span><h5>Configurações</h5>
                    <hr class="linha-black">
                    <div class="d-inline flex-wrap">
                        <a href="" class="btn btn-perfil">Editar Perfil</a>
                        <a href="" class="btn btn-perfil">Meus Anúncios</a>
                        <a href="" class="btn btn-perfil">Redefinir Senha</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="area-user shadow">
                    
                </div>
            </div>
        </div>
    </section>

    </div>

<?php include '../includes/footer.php' ?>