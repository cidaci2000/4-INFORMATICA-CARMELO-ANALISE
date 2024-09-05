<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome=$_POST['nome'];



    $sql="INSERT INTO aluno(nome, endereco, datadenascimento ) VALUES('$nome', '$endereco')";

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
    <link rel="stylesheet" href="css/adicionarcurso.css">

</head>
<body>
    <fieldset>
        <div class="caixadeformulario">
          <img src="midias/logo/wakeuphouselogo2.png" width="200px">
          <div class="formulario">
          <h1>Cadastrar aluno</h1>
  
              <br>
              <div class="textoformulario">
                <form action="/pagina-processa-dados-do-form" method="post">
                  <aside>
                  <div>
                      <label for="name">Nome:</label>
                      <input type="text" id="name" />
                  </div>
                  <div>
                    <label for="name">CPF:</label>
                    <input type="text" id="cpf" />
                </div>
                <div><label for="dtaNascimento">Data de nascimento:</label>
                    <input type="date" id="datainicio" name="datanascimento" placeholder="Insira sua data de nascimento">
                  </div>

                <div>
                    <label for="name">Endereço:</label>
                    <input type="text" id="endereco" />
                </div>
                <div>
                    <label for="name">Email:</label>
                    <input type="text" id="email" />
                </div>
                <div>
                    <label for="name">Instagram:</label>
                    <input type="text" id="redesocial" />
                </div>
                                       
                      <input type="checkbox"/>Aceito os <a class="check" href="#">Termos de taxa de matrícula</a> ,<br>
                      <a class="check" href="#">Termos de Autorização de uso de imagem</a>
                      <br>
                     
  
                      <div class="button">
                      <button type="submit">Enviar</button>
                      </aside>
                  </div>
              </form>

              <h1>Dados do Responsável:</h1>
              <form action="/pagina-processa-dados-do-form" method="post">
                <aside>
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" />
                </div>
                <div>
                  <label for="name">CPF:</label>
                  <input type="text" id="cpf" />
              </div>
              <div><label for="dtaNascimento">Data de nascimento:</label>
                  <input type="date" id="datainicio" name="datanascimento" placeholder="Insira sua data de nascimento">
                </div>

                <p>
                    <input type="radio" name="sexo" value="mae">Mãe
                    <input type="radio" name="sexo" value="pai">Pai
                    <input type="radio" name="sexo" value="outro">Outro:<input type="text" id="outro"> </p>
                    

              <div>
                  <label for="name">Endereço:</label>
                  <input type="text" id="endereco" />
              </div>
              <div>
                  <label for="name">Email:</label>
                  <input type="text" id="email" />
              </div>
              <div>
                  <label for="name">Instagram:</label>
                  <input type="text" id="redesocial" />
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