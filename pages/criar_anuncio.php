<?php require_once "../config/config.php";?>

<?php

    

?>

<?php include '../includes/menudashboard.php' ?>

    <div class="container" style="margin-top: 3em; margin-bottom: 3em;">
        <div class="area_cont">
            <h3>Criar Anuncio</h3>
            <hr class="linha-black">
            
            <!--form-->
            <div class="back-forms shadow">
                <h6>Dados Imóvel/Proprietário</h6>
                <hr>
                <form>
                    <div class="form-row">
                        <div class="col-sm">
                            <label>Proprietário:</label>
                            <input type="text" class="form-control" placeholder="Nome do Proprietário" value="" required>
                        </div>
                        <div class="col-sm">
                            <label>Tipo de Anuncio:</label>
                            <select class="form-control" required>
                                <option value="Aluguel" selected>Aluguel</option>
                                <option value="Venda">Venda</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Cidade:</label>
                            <select class="form-control" required>
                                <option value="Juazeiro do Norte" selected>Juazeiro do Norte - CE</option>
                                <option value="Crato">Crato - CE</option>
                                <option value="Barbalha">Barbalha - CE</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="CEP" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" placeholder="Endereço" required>
                        </div>
                        <div class="col-sm">
                            <label>N°:</label>
                            <input type="number" class="form-control" placeholder="123" required>
                        </div>
                        <div class="col-sm">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" placeholder="Bairro" required>
                        </div>
                        <div class="col-sm">
                            <label>Visibilidade:</label>
                            <select class="form-control disabled" disabled>
                                <option value="Disponível" selected>Disponível</option>
                                <option value="Indisponível">Indisponível</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm">
                            <label>Telefone / Celular:</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Telefone / Celular" required>
                        </div>
                        <div class="col-sm">
                            <label>Whatsapp:</label>
                            <input type="text" class="form-control" id="wpp" placeholder="Whatsapp" required>
                        </div>
                    </div>

                    <br>
                    <h6>Imóvel</h6>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm">
                            <label>Foto da Fachada:</label>
                            <input type="file" class="form-control-file" required>
                        </div>
                        <div class="col-sm">
                            <label>Foto dos Cômodos:</label>
                            <input type="file" class="form-control-file" multiple required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm">
                            <label>Valor:</label>
                            <input type="text" class="form-control" id="valor" placeholder="R$ 0.000,00" required>
                        </div>
                        <div class="col-sm">
                            <label>Este valor pode ser negociável?</label>
                            <select class="form-control" required>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label>Quantidade de Cômodos:</label>
                            <select class="form-control" required>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="Mais de 10">Mais de 10</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-anunciar">Anunciar</button>

                </form>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php' ?>