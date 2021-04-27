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
                        <div class="col">
                            <label>Proprietário:</label>
                            <input type="text" class="form-control" placeholder="Nome do Proprietário">
                        </div>
                        <div class="col">
                            <label>Tipo de Anuncio:</label>
                            <select class="form-control">
                                <option value="Aluguel" selected>Aluguel</option>
                                <option value="Venda">Venda</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Cidade:</label>
                            <select class="form-control">
                                <option value="Juazeiro do Norte" selected>Juazeiro do Norte</option>
                                <option value="Crato">Crato</option>
                                <option value="Barbalha">Barbalha</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" placeholder="Endereço">
                        </div>
                        <div class="col">
                            <label>N°:</label>
                            <input type="text" class="form-control" placeholder="123">
                        </div>
                        <div class="col">
                            <label>Bairro:</label>
                            <input type="text" class="form-control" placeholder="Bairro">
                        </div>
                        <div class="col">
                            <label>Visibilidade:</label>
                            <select class="form-control disabled" disabled>
                                <option value="Disponível" selected>Disponível</option>
                                <option value="Indisponível">Indisponível</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label>Telefone / Celular:</label>
                            <input type="text" class="form-control" placeholder="(00) 00000-0000">
                        </div>
                        <div class="col">
                            <label>Whatsapp:</label>
                            <input type="text" class="form-control" placeholder="(00) 00000-0000">
                        </div>
                    </div>

                    <br>
                    <h6>Imóvel</h6>
                    <hr>
                    <div class="form-row">
                        <div class="col">
                            <label>Foto da Fachada:</label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="col">
                            <label>Foto dos Cômodos:</label>
                            <input type="file" class="form-control-file" multiple>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label>Valor:</label>
                            <input type="text" class="form-control" placeholder="R$ 0.000,00">
                        </div>
                        <div class="col">
                            <label>Quantidade de Cômodos:</label>
                            <select class="form-control">
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

                    <button type="submit" class="btn btn-anunciar shadow">Anunciar</button>

                </form>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php' ?>