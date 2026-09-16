<?php include "cabecalho.php"; ?>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <h2 class="mb-4">Cadastro de cliente</h2>

        <?php if (isset($_GET["erro"]) && $_GET["erro"] !== "") { ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($_GET["erro"]); ?>
            </div>
        <?php } ?>

        <form action="salvarCliente.php" method="post">
            <input name="id_cliente" type="hidden" />

            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="nome" class="form-label">Nome:</label>
                    <input class="form-control" id="nome" name="nome" type="text" required />
                </div>
                <div class="col-md-4">
                    <label for="cpf_cnpj" class="form-label">CPF/CNPJ:</label>
                    <input class="form-control" id="cpf_cnpj" name="cpf_cnpj" type="text" maxlength="18" required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-7">
                    <label for="email" class="form-label">E-mail:</label>
                    <input class="form-control" id="email" name="email" type="email" />
                </div>
                <div class="col-md-5">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input class="form-control" id="telefone" name="telefone" type="text" maxlength="20" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                    <input class="form-control" id="data_nascimento" name="data_nascimento" type="date" />
                </div>
                <div class="col-md-6">
                    <label for="logradouro" class="form-label">Logradouro:</label>
                    <input class="form-control" id="logradouro" name="logradouro" type="text" maxlength="200" />
                </div>
                <div class="col-md-2">
                    <label for="numero" class="form-label">Número:</label>
                    <input class="form-control" id="numero" name="numero" type="text" maxlength="20" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="complemento" class="form-label">Complemento:</label>
                    <input class="form-control" id="complemento" name="complemento" type="text" maxlength="100" />
                </div>
                <div class="col-md-4">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input class="form-control" id="bairro" name="bairro" type="text" maxlength="100" />
                </div>
                <div class="col-md-4">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input class="form-control" id="cidade" name="cidade" type="text" maxlength="100" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input class="form-control text-uppercase" id="estado" name="estado" type="text" maxlength="2" />
                </div>
                <div class="col-md-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input class="form-control" id="cep" name="cep" type="text" maxlength="9" />
                </div>
                <div class="col-md-6 d-flex align-items-end pb-2">
                    <div>
                        <span class="me-3">Ativo:</span>
                        <input class="form-check-input" id="ativo_sim" type="radio" name="ativo" value="1" checked>
                        <label class="form-check-label me-4" for="ativo_sim">Sim</label>
                        <input class="form-check-input" id="ativo_nao" type="radio" name="ativo" value="0">
                        <label class="form-check-label" for="ativo_nao">Não</label>
                    </div>
                </div>
            </div>

            <div class="text-end mb-5">
                <a href="clientes.php" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-success" type="submit">Salvar Cliente</button>
            </div>
        </form>
    </div>
</div>

<?php include "rodape.php"; ?>