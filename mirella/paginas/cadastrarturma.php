<?php 
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomedaturma=$_POST['nomedaturma'];
    $nomedocurso=$_POST['nomedocurso'];
    $nomedoprofessor=$_POST['nomedoprofessor'];
    $quantidadealunos=$_POST['quantidadealunos'];
   
    


    $sql="INSERT INTO turma (nomedaturma, nomedocurso, nomedoprofessor, quantidadealunos) 
VALUES('$nomedaturma','$nomedocurso','$nomedoprofessor','$quantidadealunos')";
    
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
    <title>Adicionar turma| Wake Up House</title>
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
          <legend>Adicionar uma nova turma:</legend>
  
              <br>
              <div class="textoformulario">
                <form action="cadastrarturma.php" method="post">
                  <aside>
                  <div>
                      <label for="name">Nome da turma:</label>
                      <input type="text" id="name" name="nomedaturma">
                  </div>
                  <div>
                      <label for="name">Nome do curso:</label>
                      <input type="text" id="name" name="nomedocurso">
                  </div>
                  <div>
                      <label for="name">Nome do professor:</label>
                      <input type="text" id="name" name="nomedoprofessor">
                  </div>
                  <div>
                      <label for="name">Quantidade de Alunos:</label>
                      <input type="text" id="name" name="quantidadealunos">
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