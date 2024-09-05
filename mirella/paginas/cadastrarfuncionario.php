<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $datadenascimento=$_POST['datadenascimento'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $formacao=$_POST['formacao'];
    $redessociais=$_POST['redessociais'];
    $datadeinicio=$_POST['datadeinicio'];
    


    $sql="INSERT INTO funcionario (nome, cpf, telefone, datadenascimento, email, senha, formacao, redessociais, datadeinicio ) 
VALUES('$nome','$cpf','$telefone','$datadenascimento', '$email','$senha' ,'$formacao','$redessociais','$datadeinicio')";
    
    if(mysqli_query($conexao , $sql)){
        echo "Funcionário cadastrado";
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
    <title>Adicionar funcionário| Wake Up House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cadastros.css">

</head>
<body>
    <fieldset>
        <div class="caixadeformulario">
          <img src="midias/logo/wakeuphouselogo2.png" width="366px">
          <div class="formulario">
          <legend>Adicionar um novo funcionário:</legend>
  
              <br>
              <div class="textoformulario">
                <form action="cadastrarfuncionario.php" method="post">
                  <aside>
                  <div>
                      <label for="name">Nome:</label>
                      <input type="text" id="name" name="nome">
                  </div>

                  <div>
                    <label for="text">CPF:</label>
                    <input type="text" id="name" name="cpf">
                </div> 

                <div>
                    <label for="text">Telefone:</label>
                    <input type="text" id="name" name="telefone">
                </div> 
                <div><label for="dtaNascimento">Data de nascimento:</label>
                  <input type="date" id="datadenascimento" name="datadenascimento">
                </div>

                <div>
                    <label for="text">Email:</label>
                    <input type="text" id="name" name="email">
                </div> 
                
                <div>
                    <label for="text">Senha:</label>
                    <input type="text" id="name" name="senha">
                </div> 

                <div>
                    <label for="text">Formação:</label>
                    <input type="text" id="name" name="formacao">
                </div> 

                <div>
                    <label for="text">Redes Sociais:</label>
                    <input type="text" id="name" name="redessociais">
                </div> 

                  <div><label for="dtaNascimento">Data de início:</label>
                  <input type="date" id="datadeinicio" name="datadeinicio">
                </div>
                
                                            
                      
  
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