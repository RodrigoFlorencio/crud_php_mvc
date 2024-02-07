<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/home.css">
    <title>PHP Form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="header">

        <div class="logo">
            <p>
                Cadastro PHP
            </p>
        </div>

        <div class="menu">

            <ul>

                <li>
                    <a href="<?=$base;?>/">Home</a>
                </li>

                <li>
                    <a href="<?=$base;?>/add-vendedor">ADD Vendedores</a>
                </li>

                <li>
                    <a href="<?=$base;?>/add-vendas.php">ADD Vendas</a>
                </li>

                <!-- <li>
                    <a href="<?=$base;?>/logout.php">Sair</a>
                </li> -->
                
            </ul>

        </div>

    </div>

</body>

</html>