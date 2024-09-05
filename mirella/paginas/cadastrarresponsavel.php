<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $datadenascimento=$_POST['datadenascimento'];
    $nomealuno=$_POST['nomealuno'];
    $responsavel=$_POST['responsavel'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $redessociais=$_POST['redessociais'];

    $sql="INSERT INTO responsavel(nome, cpf, datadenascimento, nomealuno, responsavel, endereco, telefone, email, senha, redessociais) 
    VALUES('$nome','$cpf','$datadenascimento','$nomealuno', '$responsavel','$endereco' ,'$telefone','$email', '$senha', '$redessociais')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado";
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
    <title>Cadastrar Responsável| Wake Up House</title>
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
              <h1>Dados do Responsável:</h1>
              <form action="cadastrarresponsavel.php" method="post">
                <aside>
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="nome">
                </div>
                <div>
                  <label for="name">CPF:</label>
                  <input type="text" id="name" name="cpf">
              </div>
              <div><label for="dtaNascimento">Data de nascimento:</label>
                  <input type="date" id="datadenascimento" name="datadenascimento" placeholder="Insira sua data de nascimento">
                </div>
                <div>
                    <label for="name">Nome do Aluno:</label>
                    <input type="text" id="name" name="nomealuno">
                </div>

                <div>
                <label for="name">Grau de parentesco:</label>
                <p>
                    <input type="radio" name="responsavel" value="mae">Mãe
                    <input type="radio" name="responsavel" value="pai">Pai
                    <input type="radio" name="responsavel" value="outro">Outro:<input type="text" id="outro"> </p>
                </div>    

              <div>
                  <label for="name">Endereço:</label>
                  <input type="text" id="name" name="endereco">
              </div>
              <div>
                  <label for="name">Telefone:</label>
                  <input type="text" id="name" name="telefone">
              </div>
              <div>
                  <label for="name">Email:</label>
                  <input type="text" id="name" name="email">
              </div>
              <div>
                    <label for="name">Senha:</label>
                    <input type="text" id="name" name="senha">
                </div>
              <div>
                  <label for="name">Instagram:</label>
                  <input type="text" id="name" name="redessociais">
              </div>
            
              <input type="checkbox"/>Aceito os <a class="check" href="#">Termos de taxa de matrícula</a> ,<br>
                      <a class="check" href="#">Termos de Autorização de uso de imagem</a>
                      <br>

                    <div class="button">
                    <button type="submit">Enviar</button>
                    </aside>
                </div>
            </form>

                  <br>
          </div>
          </div>
      </fieldset>
</body>
</html>
