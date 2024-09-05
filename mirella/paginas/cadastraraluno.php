<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $datadenascimento=$_POST['datadenascimento'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $redessociais=$_POST['redessociais'];
    $fotoaluno=$_FILES['fotoaluno'];


    $sql="INSERT INTO aluno(nome, endereco, datadenascimento, cpf, telefone, email, senha, redessociais, fotoaluno)
    VALUES('$nome','$endereco','$datadenascimento','$cpf', '$telefone','$email' ,'$senha','$redessociais', '$fotoaluno')";

    $stmt-> bindParam(':nome', $nome);
    $stmt-> bindParam(':endereco', $endereco);
    $stmt-> bindParam(':datadenascimento', $datadenascimento);
    $stmt-> bindParam(':cpf', $cpf);
    $stmt-> bindParam(':telefone', $telefone);
    $stmt-> bindParam('email', $email);
    $stmt-> bindParam(':senha', $senha); 
    $stmt-> bindParam('redessociais', $redessociais);
    $stmt-> bindParam('fotoaluno', $fotoaluno);

    if(mysqli_query($conexao, $sql)){
        echo "usuário cadastrado";
            }else{
        echo "erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno| Wake Up House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cadastros.css">

</head>
<body>
    <fieldset>
        <div class="caixadeformulario">
          <img src="midias/logo/wakeuphouselogo2.png" width="200px">
          <div class="formulario">
          <h1>Cadastrar aluno</h1>
  
              <br>
              <div class="textoformulario">
                <form action="cadastraraluno.php" method="post">
                  <aside>
                  <div>
                      <label for="name">Nome:</label>
                      <input type="text" id="name" name="nome" />
                  </div><br>
                  <div>
                    <label for="name">Endereço:</label>
                    <input type="text" id="endereco" name="endereco"><br>
                </div><br>
                <div><label for="dtaNascimento">Data de nascimento:</label>
                    <input type="date" id="datainicio" name="datadenascimento" placeholder="Insira sua data de nascimento"><br>
                  </div><br>

                  <div>
                    <label for="name">CPF:</label>
                    <input type="text" id="cpf" name="cpf"><br>
                </div><br>
                <div>
                    <label for="name">Telefone:</label>
                    <input type="text" id="telefone" name="telefone"><br>
                </div><br>

                <div>
                    <label for="name">Email:</label>
                    <input type="text" id="email" name="email"><br>
                </div><br>
                <div>
                    <label for="name">Senha:</label>
                    <input type="text" id="senha" name="senha"><br>
                </div><br>
                <div>
                    <label for="name">Instagram:</label>
                    <input type="text" id="redesocial" name="redessociais"><br>
                </div><br>
                <div>
                    <label for="name">Insira a foto do aluno:</label>
                    <input type= "file" name="fotoaluno"  id="fotoaluno"  accept=""><br>
                </div>
                                       
                      <input type="checkbox"/>Aceito os <a class="check" href="#">Termos de taxa de matrícula</a> ,<br>
                      <a class="check" href="#">Ters de Autorização de uso de imagem</a>
                      <br><br>
                     
  
                      <div class="button">
                      <button type="submit">Enviar</button>
                      </aside>
                  </div>
              </form>

          </div>
      </fieldset>
</body>
</html>