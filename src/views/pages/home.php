<?php $render('header'); ?>

<div class="container">

        <div class="row">

            <div class="menu">

                

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="texto-principal">

                    <p>
                        Vendedores
                    </p>

                </div>

            </div>

        </div>

        <div class="row">

            <!-- <div class="filtros">

                <select class="form-select">
                    <option selected>Filtrar por Cidade:</option>
                    <option value="1">Guarulhos</option>
                    <option value="2">São Paulo</option>
                    <option value="3">Suzano</option>
                </select>

            </div> -->

            <div class="formulario">

                <div class="table-responsive">

                    <table class="table table-dark">

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php foreach ($vendedores as $vendedor) : ?>

                            <tbody>

                                <tr>
                                    <th scope="row">
                                        <?= $vendedor['id']; ?>
                                    </th>

                                    <td>
                                        <a href="<?=$base;?>/vendedor-detalhes/<?=$vendedor['id'];?>">
                                            <?= $vendedor['nome']; ?>
                                        </a>
                                    </td>

                                    <td>
                                        <?= $vendedor['cidade']; ?>
                                    </td>

                                    <td>
                                        <?= $vendedor['email']; ?>
                                    </td>

                                    <td>
                                        <?= $vendedor['telefone']; ?>
                                    </td>

                                    <td>
                                        <a href="editar.php?id=<?= $vendedor['id']; ?>">Editar</a>
                                    </td>

                                    <td>
                                        <a href="excluir.php?id=<?= $vendedor['id']; ?>">Excluir</a>
                                    </td>
                                </tr>

                            </tbody>

                        <?php endforeach; ?>

                    </table>

                </div>

            </div>

        </div>

    </div>