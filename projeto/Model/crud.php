<?php

require "conexao.php";

session_start();

class crud
{

  function inserir_Usuario($email, $senha, $nome)
  {


    $conn = conectar();

    $pegaEmail = mysqli_query($conn, "SELECT * FROM logar WHERE email = '$email'");

    if (mysqli_num_rows($pegaEmail) == 1) {


      echo "<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/frm_cadastro.html';</script>";
    } else {

      $sql = "INSERT INTO logar (email,senha,nome) values('$email','$senha','$nome')";

      mysqli_query($conn, $sql);

      echo "<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/frm_logar.html';</script>";
    }
  }

  function selecionar_Usuario($email, $senha, $nome)
  {


    $conn = conectar();

    $result_usuario = "SELECT * FROM logar  WHERE email= '$email' && nome ='$nome'  && senha = '$senha' LIMIT 1";

    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $resultado = mysqli_fetch_assoc($resultado_usuario);


    if (isset($resultado)) {

      $_SESSION['Usuarionome'] = $resultado['nome'];
      $_SESSION['usuarioEmail'] = $resultado['email'];
      $_SESSION['usuarioSenha'] = $resultado['senha'];

      header("Location: ../View/frm_perfil_usuario.php");
    } else {

      echo "<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/frm_logar.html';</script>";
    }
  }

  function cadastrar_consulta($nome_do_paciente, $data_horario, $endereco, $telefone)
  {

    $conn = conectar();

    $sql = "INSERT INTO consulta (nome_do_paciente ,data_horario, endereco, telefone) values('$nome_do_paciente','$data_horario','$endereco','$telefone')";

    mysqli_query($conn, $sql);

    echo "<script language='javascript' type='text/javascript'>alert('Consulta cadastrada com sucesso');window.location.href='../View/frm_funcionario_acesso.php';</script>";
  }



  public function excluir_consulta($nome_do_paciente)
  {

    $conn = conectar();

    $nome_paci = mysqli_query($conn, "SELECT * FROM consulta WHERE nome_do_paciente = '$nome_do_paciente'");

    if (mysqli_num_rows($nome_paci) == 0) {

      echo "<script language='javascript' type='text/javascript'>alert('Não foi possível excluir. Verifique o nome do paciente!');window.location.href='../View/frm_excluir.php';</script>";
    } else {

      $result_consulta = "DELETE FROM consulta WHERE nome_do_paciente = '$nome_do_paciente'";

      mysqli_query($conn, $result_consulta);

      if (mysqli_affected_rows($conn) != 0) {

        echo "<script language='javascript' type='text/javascript'>alert('Consulta cancelada com sucesso!');window.location.href='../View/frm_funcionario_acesso.php';</script>";
      } else {

        header("Location:../view/frm_excluir.php");
      }
    }
  }


  public function alterar_consulta($nome_do_paciente, $data_horario)
{

    $conn = conectar();

    $pega_consulta = mysqli_query($conn, "SELECT * FROM consulta WHERE nome_do_paciente = '$nome_do_paciente'");

    if (mysqli_num_rows($pega_consulta) == 0) {

        echo "<script language='javascript' type='text/javascript'>alert('Esta consulta NÃO está cadastrada em nossos registros');window.location.href='../View/frm_alterar.php'</script>";
    } else {

        $result_consulta1 = "UPDATE consulta SET data_horario = '$data_horario' WHERE nome_do_paciente = '$nome_do_paciente'";

        mysqli_query($conn, $result_consulta1);

        if (mysqli_affected_rows($conn) != 0) {
            echo "
                 <script language='javascript' type='text/javascript'>alert('Consulta do paciente alterada com sucesso!');window.location.href='../View/frm_funcionario_acesso.php'</script>";
        } else {
            echo "
                   <script language='javascript' type='text/javascript'>alert('Não foi possível alterar esta consulta!');window.location.href='../View/frm_alterar.php'</script>";
        }
    }
}

}
