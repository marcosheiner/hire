<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../home/index.php");
}

?>

<?php include_once '../includes/menudashboard.php' ?>


<div class="container" style="margin-top: 3em; margin-bottom: 3em;">

    <div class="area_cont">
        <h3>Procurar</h3>
        <hr class="linha-black">
        <div class="input-group">
            <input type="text" class="form-control input-buscar shadow" placeholder="Procurar">
            <span class="input-group-btn">
                <button class="btn btn-search shadow" type="button"><span class="material-icons">search</span></button>
            </span>
        </div>
    </div>

    <br>

    <div class="area_cont">
        <h3>Anunciados Recentemente</h3>
        <hr class="linha-black">
        
        <div class="owl-carousel owl-theme">
            <!--while do banco de dados-->
            <div class="item">
                <div class="card shadow">
                    <div class="area-card-image">
                        <img src="https://i.pinimg.com/736x/48/54/58/48545831887c996201cc8e639ba81c8a.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <span class="badge badge-hire">R$ 700,00</span>
                        <h5 class="card-title">Aluguel</h5>
                        <div class="text-center">
                            <p class="prop-card">Juazeiro do Norte - CE</p>
                            <p class="prop-card">Salesianos</p>
                        </div>
                        <a href="#" class="btn btn-card">Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card shadow">
                    <img src="https://i.pinimg.com/736x/48/54/58/48545831887c996201cc8e639ba81c8a.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge badge-hire">R$ 1.800,00</span>
                        <h5 class="card-title">Venda</h5>
                        <div class="text-center">
                            <p class="prop-card">Crato - CE</p>
                            <p class="prop-card">Bairro</p>
                        </div>
                        <a href="#" class="btn btn-card">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h6><a href="">Ver Todos</a></h6>
        </div>
    </div>

    <br>

    <div class="area_cont">
        <h3>Todos os Anuncios</h3>
        <hr class="linha-black">
        
        <div class="owl-carousel owl-theme">
            <!--while do banco de dados-->
            <div class="item">
                <div class="card shadow">
                    <img src="https://i.pinimg.com/736x/48/54/58/48545831887c996201cc8e639ba81c8a.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge badge-hire">R$ 700,00</span>
                        <h5 class="card-title">Aluguel</h5>
                        <div class="text-center">
                            <p class="prop-card">Juazeiro do Norte - CE</p>
                            <p class="prop-card">Salesianos</p>
                        </div>
                        <a href="#" class="btn btn-card">Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card shadow">
                    <img src="https://i.pinimg.com/736x/48/54/58/48545831887c996201cc8e639ba81c8a.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge badge-hire">R$ 1.800,00</span>
                        <h5 class="card-title">Venda</h5>
                        <div class="text-center">
                            <p class="prop-card">Crato - CE</p>
                            <p class="prop-card">Bairro</p>
                        </div>
                        <a href="#" class="btn btn-card">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h6><a href="">Ver Todos</a></h6>
        </div>
    </div>
</div>

<?php include '../includes/footer.php' ?>