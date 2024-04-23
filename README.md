# Check-Direct-Source-beta
Projeto Pessoal: Eu (Gabriel) trabalho em uma empresa que realizamos checagem de caixas com código de barras, utilizando marca texto, e observei que isso consumia muito tempo, dependendo da quantidade de caixas demoraria horas. e para melhor agilidade, e criei o meu próprio sistema de checagem chamado "DIRECT SOURCE" baseado no nome do setor.


ABAIXO ESTAREI RELATANDO ALGUMAS MUDANÇAS PARA MELHORIAS DO CODIGO/SISTEMA


1. PROBLEMAS A SER SOLUCINADOS

    1.1 resolver problema do arquivo check.php, para  quando o usuario for invalido retornar para a pagina de login, e nao para a pagina check.
        1.2 Resolver o problema na pagina check, se nao ouver um valor inseridos na caixa de texto, devera aparecer uma mensagem de erro.

    23/04/2024

2. PROBLEMAS RESOLVIDOS

    1.1 Resolvido o problema de redirecionamento para a pagina check


3. ATUALIZAÇOES 

    17/04/2024
        1.1 Implementados forma basica de validação de usuario sem o uso de um banco de dados utilizando apenas arrays.
            1.2 Correção do redirecionamento para a pagina de check, agora o mesmo é redirecionado para a pagina principal de login.
    
    23/04/2024
    2.1 Antes o usuario entrava e realizava checagem mesmo o campo estando em branco, fazendo com que fizesse a "confirmação" de leitura dos codigos.
        2.1 Foi adicionado a obrigatoriedade de preechimento de campo.
      