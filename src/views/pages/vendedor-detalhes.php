<?php $render('header'); ?>

<div class="container">

    <div class="row">

        <div class="col-12">

            <div class="texto-principal">
                <p>
                    Detalhes Vendedor
                </p>
            </div>

        </div>

    </div>

    <input type="hidden" name="id" value="<?= $vendedores[0]['id']; ?>">

    <!-- Campos para as informações do vendedor -->
    <div class="row formulario">

        <div class="col-3">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?= $vendedores[0]['nome']; ?>" readonly>
        </div>

        <div class="col-3">
            <label>Cidade:</label>
            <input type="text" name="cidade" value="<?= $vendedores[0]['cidade']; ?>" readonly>
        </div>

        <div class="col-3">
            <label>Telefone:</label>
            <input type="text" name="telefone" value="<?= $vendedores[0]['telefone']; ?>" readonly>
        </div>

    </div>

    <!-- Lista de vendas do vendedor -->
    <div class="row">

        <div class="col-12">

            <div class="texto-principal">
                <p>
                    Vendas do Vendedor
                </p>
            </div>

        </div>

        <?php if (!empty($vendedores) && $vendedores[0]['produto'] !== null) : ?>

            <div class="col-12">

                <ul>

                    <?php foreach ($vendedores as $vendedor) : ?>

                        <li>
                            Produto: <?= $vendedor['produto']; ?> |
                            Quantidade: <?= $vendedor['qtd']; ?> |
                            Valor: <?= $vendedor['valor']; ?>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        <?php endif; ?>

        <?php if (!empty($vendedores) && $vendedores[0]['produto'] === null) : ?>

            <div class="texto-secundario">
                <p>
                    Vendedor sem vendas
                </p>
            </div>

        <?php endif; ?>

    </div>

</div>