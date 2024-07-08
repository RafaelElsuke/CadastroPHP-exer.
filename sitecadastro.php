<!-- tela de cadastro -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
</head>
<style>
    .bt {
        margin-top: 10px;
        padding: 16px 42px;
        border-radius: 3px;
        box-shadow: 0px 0px 12px -2px rgba(0, 0, 0, 0.5);
        line-height: 1.25;
        background: #FC6E51;
        text-decoration: none;
        user-select: none;
        color: white;
    }

    .card-header {
        background-color: #FC6E51;
        color: white;
        padding: 10px;
        text-align: center;
        border-radius: 3px;
        box-shadow: 0px 0px 12px -2px rgba(0, 0, 0, 0.5);
        line-height: 1.25;
        font-size: 16px;
        letter-spacing: .08em;
        text-transform: uppercase;
        position: relative;
        transition: background-color.6s ease;
        overflow: hidden;
    }

    body {
        background-color: black;
    }

    div {
        background-color: palegreen;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 970px;
        padding: 10px;
    }

    #botão {
        margin-top: 10px;
        padding: 16px 42px;
        border-radius: 3px;
        box-shadow: 0px 0px 12px -2px rgba(0, 0, 0, 0.5);
        line-height: 1.25;
        background: #FC6E51;
        text-decoration: none;
        user-select: none;
        color: white;
        font-size: 16px;
        letter-spacing: .08em;
        text-transform: uppercase;
        position: relative;
        transition: background-color .6s ease;
        overflow: hidden;

        &:after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
            top: var(--mouse-y);
            left: var(--mouse-x);
            transform-style: flat;
            transform: translate3d(-50%, -50%, 0);
            background: rgba(white, .1);
            border-radius: 100%;
            transition: width .3s ease, height .3s ease;
        }

        &:focus,
        &:hover {
            background: darken(#FC6E51, 7%);
        }

        &:active {
            &:after {
                width: 300px;
                height: 300px;
            }
        }
    }
</style>

<body>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crie seu Cadastro</div>
                    <div class="card-body">
                        <form action="cadastro02.php" method="post">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control"
                                    placeholder="Digite o nome" required>
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" name="sobrenome" class="form-control"
                                    placeholder="Digite o sobrenome" required>
                                <label for="CPF">CPF:</label>
                                <input type="number" name="CPF" class="form-control"
                                    placeholder="Digite seu CPF" required>
                                <label for="email">E-mail:</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Digite seu email" required>
                                <label for="email">Telefone:</label>
                                <input type="number" name="telefone"  class="form-control"
                                    placeholder="Digite seu Telefone" required>
                                <input type="submit" name="botão" id="botão" class="form-control" value="cadastrar">
                                <a href="ar.php"><input type='button' class="bt" value="LISTAR" </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>