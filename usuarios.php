<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        # var_dump($_GET); // $_GET  $_POST $_COOKIES ($_REQUEST , É JUNÇÃO DE TODAS AS VARIAVEIS CITADAS)
        $usuarios = array(
            array("usuario" => "gabriel_rocha", "matricula" => "800862"),
            array("usuario" => "ana_paula", "matricula" => "121212"),
            array("usuario" => "gabriel_machado", "matricula" => "202020")
        );
        
        function validarUsuario($usuario, $senha, $listaUsuarios) {
            foreach ($listaUsuarios as $user) {
                if ($user["usuario"] === $usuario && $user["matricula"] === $senha) {
                    return true;
                }
            }
            return false;
        }

        if ($usuario = $_POST["usuario"]);
            $senha =$_POST["matricula"];{
            if(validarUsuario($usuario, $senha, $usuarios)){
                echo"Login bem-sucedido! <br> Autorizando acesso!";
                header("Refresh: 3; URL=check.html");
            }
            else {
                echo"Usuario ou Senha incorreta! <br> Aguarde o redirecionamento...";
                header("Refresh: 3; URL=loginuser.html");
            }
        }
        ?>

        <p><a href="javascript:history.go(-1)"><input type="submit" value="Sair"></a></p>
        <footer>
            <strong>Desenvolvido por Gabriel Rocha</strong>
        </footer>
    </main>
</body>

</html>