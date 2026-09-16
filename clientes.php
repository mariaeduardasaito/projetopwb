<?php
include "cabecalho.php";
include "conexao.php";

$pesquisa = isset($_GET["pesquisa"]) ? trim($_GET["pesquisa"]) : "";
$clientes = [];

if ($pesquisa !== "") {
    $sql = "SELECT id_cliente, nome, cpf_cnpj, email, telefone, cidade, estado, ativo
            FROM cliente
            WHERE nome LIKE ? OR cpf_cnpj LIKE ? OR email LIKE ? OR telefone LIKE ?
            ORDER BY nome";

    $stmt = mysqli_prepare($conexao, $sql);
    if ($stmt) {
        $termo = "%" . $pesquisa . "%";
        mysqli_stmt_bind_param($stmt, "ssss", $termo, $termo, $termo, $termo);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        if ($resultado) {
            $clientes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }
        mysqli_stmt_close($stmt);
    }
} else {
    $resultado = mysqli_query(
        $conexao,
        "SELECT id_cliente, nome, cpf_cnpj, email, telefone, cidade, estado, ativo FROM cliente ORDER BY nome"
    );

    if ($resultado) {
        $clientes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
}
?>

<?php if (isset($_GET["mensagem"]) && $_GET["mensagem"] !== "") { ?>
    <div class="alert alert-success">
        <?php echo htmlspecialchars($_GET["mensagem"]); ?>
    </div>
<?php } ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Pesquisar Clientes
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <a href="novoCliente.php" class="btn btn-success">
                            Novo Cliente
                        </a>
                    </div>
                    <div class="col-md-8">
                        <form action="clientes.php" method="get">
                            <div class="input-group mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="pesquisa"
                                    value="<?php echo htmlspecialchars($pesquisa); ?>"
                                    placeholder="Nome, CPF/CNPJ, e-mail ou telefone"
                                >
                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF/CNPJ</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Cidade/UF</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($clientes) > 0) { ?>
                                <?php foreach ($clientes as $cliente) { ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($cliente["nome"]); ?></td>
                                        <td><?php echo htmlspecialchars($cliente["cpf_cnpj"] ?? ""); ?></td>
                                        <td><?php echo htmlspecialchars($cliente["email"] ?? ""); ?></td>
                                        <td><?php echo htmlspecialchars($cliente["telefone"] ?? ""); ?></td>
                                        <td>
                                            <?php
                                            $cidadeUf = trim(($cliente["cidade"] ?? "") . (($cliente["estado"] ?? "") !== "" ? "/" . $cliente["estado"] : ""));
                                            echo htmlspecialchars($cidadeUf);
                                            ?>
                                        </td>
                                        <td><?php echo !empty($cliente["ativo"]) ? "Sim" : "Não"; ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        Nenhum cliente encontrado.
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>
