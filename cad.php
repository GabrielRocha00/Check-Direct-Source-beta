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

            $nome = $_GET["nome"];
            $matricula = $_GET["matricula"];
                #echo "<strong>Bem vindo $nome</stro ng>";

            $nomeuser = "gabriel_rocha";
            $matriculauser = "800862";

            if($nome == $nomeuser &&
                $matricula == $matriculauser){
                echo "<strong>Bem vindo $nome</strong>";

            }
            else {
                echo "Usuario invalido";   
                
            }
        
        ?>
        <a href="check.html"><input type="submit" value="Prosseguir"></a>
        <p><a href="javascript:history.go(-1)"><input type="submit" value="Voltar para pagina anterior"></a></p>
        <footer>
    <strong>Desenvolvido por Gabriel Rocha</strong>
    </footer>
    </main>
</body>
</html> 



