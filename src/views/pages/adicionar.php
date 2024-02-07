<?php $render('header'); ?>

<div class="container">

        <div class="row">

            <div class="col-12">

                <div class="texto-principal">

                    <p>
                        Adiconar Vendedores
                    </p>

                </div>

            </div>

        </div>

        <form method="POST" action="<?=$base;?>/add-vendedor">

            <div class="row formulario">

                <div class="col-3">

                    <input type="text" name="nome" placeholder="Nome">

                </div>

                <div class="col-3">

                    <input type="text" name="cidade" placeholder="Cidade">

                </div>

                <div class="col-3">

                    <input type="text" name="email" placeholder="E-mail">

                </div>

                <div class="col-3">

                    <input type="text" name="telefone" placeholder="Telefone">

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