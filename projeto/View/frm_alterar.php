<?php
session_start();

// Certifique-se de que as variáveis de sessão estão definidas corretamente
if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {
    header("Location: frm_logar.php");
    exit;
} else {
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Alterar Consultas</title>
</head>

<body>
    <div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
        <legend>Alterações de Consultas</legend>
        <form class="formulario" method="POST" action="../Controller/controller_alterar.php">
            <div class="col-md-11">
                <label for="nome_paciente">Nome do paciente:</label>
                <input type="text" id="trecho" name="nome_paciente" class="form-control" placeholder="Digite o nome do paciente*"><br>

                <label for="data_horario">Data e Horário:</label>
                <input type="datetime-local" id="data_horario" name="data_horario" class="form-control" placeholder="Digite a data e o horário da consulta*"><br>

                <input type="submit" name="acao" class="btn btn-success" value="Alterar Consulta">
        </form><br><br>

        <form class="formulario" action="frm_funcionario_acesso.php">
            <input type="submit" class="btn btn-primary" value="Voltar">
        </form>
    </div>
    </div>
</body>

</html>
<?php } ?>
