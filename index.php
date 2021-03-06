<?php include("cabecalho.php"); ?>
                <div class="header">
                    <h1>CADASTRO DE VEÍCULOS</h1>
                </div>
                <form name="cadastro" action="script.php" method="POST">
                    <div class="corpo-form">
                        <div class="partes">
                            <label class="marca" for="marca">Marca</label>
                            <select name="marca" id="marca" required onblur="validaCampoMarca(this);">
                                <option value="">Selecione uma marca</option>
                                <option value="Volvo">Volvo</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Ford">Ford</option>
                            </select>
                            <span class="txt-valida txt-marca"></span>
                        </div>
                        <div class="partes">
                            <label for="modelo">Modelo</label>
                            <input name="modelo" type="text" id="modelo" required minlength="2" onblur="validaCampoModelo(this);">
                            <span class="txt-valida txt-modelo"></span>
                        </div>
                        <span class="txt-validacao"></span>
                        <div class="partes">
                            <label for="anoFabricacao">Ano de fabricação</label>
                            <input name="anoFabricacao" type="number" id="anoFabricacao" required min="1970" max="2014" onblur="validaCampoAno(this)">
                            <span class="txt-valida txt-ano"></span>
                        </div>
                        <fieldset class="opcionais" onchange="validaOpcionais();">
                            <legend>Opcionais</legend>
                            <div>
                                <input type="checkbox" class="checkbox" id="direcao-hidraulica" name="opcionais[]" value="Direção Hidráulica">
                                <label for="direcao-hidraulica">Direção Hidraulica</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="ar-condicionado" name="opcionais[]" value="Ar Concicionado">
                                <label for="ar-condicionado">Ar Condicionado</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="air-bag" name="opcionais[]" value="Air Bag">
                                <label for="air-bag">Air Bag</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="alarme" name="opcionais[]" value="Alarme">
                                <label for="alarme">Alarme</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="banco-de-couro" name="opcionais[]" value="Banco de Couro">
                                <label for="banco-de-couro">Banco de Couro</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="som" name="opcionais[]" value="Som">
                                <label for="som">Som</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="travas" name="opcionais[]" value="Travas">
                                <label for="travas">Travas</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" id="piloto-automatico" name="opcionais[]" value="Piloto Automático">
                                <label for="piloto-automatico">Piloto Automático</label>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" name="opcionais[]" value="Outro" onselect="required()" id="outro">
                                <label for="outro">Outro</label>
                                <input type="text" id="outro-text" name="outro" onblur="validaOutro(this);" disabled>
                            </div>
                        </fieldset>
                        <span class="txt-valida txt-opcionais"></span>
                    </div>
                    <div class="botoes">
                        <input class="cadastrar" type="submit" value="Cadastrar">
                        <a href="listar.html" target="_blank" ><input class="listarBtn" type="button" value="Listar"></a>
                        <input class="limpar" type="reset" value="Limpar">
                    </div>
                </form>
<?php include("rodape.php"); ?>