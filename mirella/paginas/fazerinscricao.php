<?php 
include("conexao.php");

    $nome=$_POST['nome'];
    $datadenascimento=$_POST['datadenascimento'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $cursos=$_POST['cursos'];
  


    $sql="INSERT INTO inscricao(nome,telefone, email, cursos) 
    VALUES('$nome','$telefone','$email','$cursos')";

    if(mysqli_query($conexao, $sql)){
        echo "usuário cadastrado";
            }else{
        echo "erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css"><link rel="stylesheet" href="css.css">
    <title>Fazer inscrição|WakeUp House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cssfazerinscricao.css">
</head>

<body>
    <header>
       <div class="imagemlogo">
        <img src="midias/logo/wakeuphouse.png" width="100" height="100">
      </div>
        <nav>
            <ul class="nav-list">
            <li><a href="file:///C:/Users/Samsung/Desktop/WAKE%20UP%20HOUSE/IDEIA/principal.html">Página Inicial</a></li>
            <li><a href="páginas/cursos.html">Cursos</a></li>
            <li><a href="páginas/quemsomos.html">Quem Somos</a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0"">Contato</a></li>
          </ul>
        </nav>
    </header>
    
    <br> <br> <br> <br>
    <fieldset>
      <div class="caixadeformulario">
        <img src="midias/imagenscursos/verticalculinaria.JPG" width="366px">
        <div class="formulario">
		<legend>Faça sua inscrição aqui:</legend>

            <br>
            <div class="textoformulario">
              <form action="/pagina-processa-dados-do-form" method="post">
                <aside>
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="nome">
                </div>
                <div><label for="dtaNascimento">Data de nascimento:</label>
                <input type="date" id="datainicio" name="datadenascimento" placeholder="Insira sua data de nascimento">
              </div>
                <div>
                  <label for="fone">Telefone:</label>
                  <input type="text" id="telefone" name="telefone">
        
                  <div>
                    <label for="name">Email:</label>
                    <input type="text" id="email" name="email">
                </div>   
                        
                <div>
                  <background-img="1.png">
                    <label for= "nomecurso">Curso que deseja se inscrever: <label><br>
                      <select name="cursos"><br>
                        <option value="Culinária Infantil">Culinária Infantil</option>
                        <option value="valor2" selected>curso 2</option>
                        <option value="valor3">curso 3</option>
                        <option value="valor3">curso 4</option>
                        <option value="valor3">curso 5</option>
                        <option value="valor3">curso 6</option>
                        <option value="valor3">curso 7</option>
                        <option value="valor3">curso 8</option>
                        <option value="valor3">curso 9</option>
                        <option value="valor3">curso 10</option>
                      </select>
                    </div> 
                    
                    <input type="checkbox"/>Aceito os <a class="check" href="#">Termos de taxa de matrícula</a> 
                    <br><br>

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