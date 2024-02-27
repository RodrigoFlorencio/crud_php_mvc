<?php $render('header'); ?>

<div class="container">

    <div class="row">

        <div class="col-12">

            <div class="texto-principal">

                <p>
                    Editar vendedor
                </p>

            </div>

        </div>

    </div>

    <form method="POST" action="<?= $base; ?>/editar-vendedor">

        <div class="row formulario">

            <input type="hidden" name="id" value="<?= $vendedores[0]['id']; ?>">

            <div class="col-3">

                <label>Nome:</label>
                <input type="text" name="nome" value="<?= $vendedores[0]['nome']; ?>">

            </div>

            <div class="col-3">

                <label>Cidade:</label>
                <input type="text" name="cidade" value="<?= $vendedores[0]['cidade']; ?>">

            </div>

            <div class="col-3">

                <label>E-mail:</label>
                <input type="text" name="email" value="<?= $vendedores[0]['email']; ?>">

            </div>

            <div class="col-3">

                <label>Telefone:</label>
                <input type="text" name="telefone" value="<?= $vendedores[0]['telefone']; ?>">

            </div>

        </div>

        <div class="row">

            <div class="col-3">

                <div class="btn-enviar">
                    <button type="submit" class="btn btn-primary">
                        Editar
                    </button>
                </div>

            </div>

        </div>

    </div>

</div>