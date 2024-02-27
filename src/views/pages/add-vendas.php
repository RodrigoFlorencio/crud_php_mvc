<?php $render('header'); ?>

<div class="container">

    <div class="row">

        <div class="col-12">

            <div class="texto-principal">

                <p>
                    Adiconar Vendas
                </p>

            </div>

        </div>

    </div>

    <form method="POST" action="<?= $base; ?>/add-vendas">

        <div class="row formulario">

            <div class="col-3">

                <select class="form-select" name="idVendedor">
                    <option selected>Escolher vendedor:</option>
                    <?php foreach ($vendedores as $vendedor) : ?>
                        <option value="<?= $vendedor['id']; ?>"><?= $vendedor['nome']; ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- <input type="text" name="idVendedor" placeholder="ID Vendedor"> -->

            </div>

            <div class="col-3">

                <input type="text" name="produto" placeholder="Produto">

            </div>

            <div class="col-3">

                <input type="text" name="qtd" placeholder="Quantidade">

            </div>

            <div class="col-3">

                <input type="text" name="valor" placeholder="Valor">

            </div>

        </div>

        <div class="row">

            <div class="col-3">

                <div class="btn-enviar">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>

            </div>

        </div>

    </div>

</div>