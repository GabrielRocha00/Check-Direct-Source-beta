<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Source</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Checagem de Peças</h1>
    </header>

    <main>
                
        <?php 
            $checkorigem = $_GET["checkorigem"];
            $codigods = $_GET["etiquetads"];

            if ($checkorigem == $codigods){
                echo"Codigo e ";
            }
            else{
                echo"Codigo NÃO confere e ";
            }

            $qtdorigem = $_GET["qtdorigem"];
            $qtdds = $_GET["qtdds"];

            if($qtdorigem == $qtdds){
                echo "Quantidade OK ";
            }
            
            else{
                echo"Quantidade não confere";
            }

            
        
        ?>
        <p><a href="javascript:history.go(-1)"><input type="submit" value="Voltar para checagem"></a></p>
        <p><a href="javascript:history.go(-3)"><input type="submit" value="Finalizar checagem"></a></p>

        <footer>
            <strong>Desenvolvido por Gabriel Rocha</strong>
        </footer>
    </main>
</body>
</html>