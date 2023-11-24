<?php
session_start();

// Certifique-se de que as variáveis de sessão estão definidas corretamente
if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {
    header("Location: frm_logar.php");
    exit;
} else {
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>Cadastro de Consultas</title>
    </head>

    <body>
        <div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
            <fieldset>
                <legend>Cadastro de Consultas</legend>
                <form class="formulario" method="POST" action="../Controller/controller_cadastrar_paciente.php">
                    <div class="col-md-11">
                        <label for="nome_paciente">Nome do paciente:</label>
                        <input type="text" id="nome_paciente" name="nome_paciente" class="form-control" placeholder="Digite o nome do paciente*" required><br>

                        <label for="data_horario">Data e Horário:</label>
                        <input type="datetime-local" id="data_horario" name="data_horario" class="form-control" placeholder="Digite a data e o horário da consulta*" required><br>

                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite o telefone do paciente*" required><br>

                        <label for="endereco">Local da consulta:</label>
                        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o endereço o local*" required><br>

                        <input type="submit" name="acao" class="btn btn-success" value="Cadastrar Consulta">
                </form><br><br>

                <form class="formulario" action="frm_funcionario_acesso.php">
                    <input type="submit" class="btn btn-primary" value="Voltar">
                </form>
            </div>
        </div>
    </body>

    </html>
<?php } ?>
