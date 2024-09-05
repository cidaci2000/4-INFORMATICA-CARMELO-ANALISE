<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css.css">
    <title>Cursos|Wake UP house</title>
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cursos.css">
</head>
<body>
  <header>
    <div class="imagemlogo">
      <img src="midias/logo/logo%20wakeuphouse.png" width="50%">
    </div>
    
      <nav>
          <ul class="nav-list">
          <li><a href="../principal.php">Início</a></li>
          <li><a href="quemsomos.html">Quem Somos</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0"">Contato</a></li>
        </ul>
      </nav>
  </header>
  <section class="carrossel-promocoes">
    </section>


      <style>
          /* cards.css */

      .card {
        /* Estilos para todos os cards */
        border: 1px solid #ccc;
        width: 300px;
        height: 400px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
       margin-left: 15px;
       margin-bottom: 5px;
        
      }

      .card-header {
        /* Estilos para o cabeçalho do card */
        font-weight: bold;
        margin-bottom: 10px;
      }

      section {
        /* Estilos para a seção de conteúdo */
        display: flex;
        flex-wrap: wrap;
      }

      img {
        /* Estilos para a imagem */
        max-width: 100%;
        height: 250px;
        margin-right: 10px;
      }
      .certo{
        display: grid;
        grid-template-columns: auto auto auto auto;
        margin-inline: center;
        flex-wrap: wrap;
        gap: 2px;
      }
      button{
        background-color: red;

      }
      </style>


<div class="certo">
  
    <?php
    include_once('conexao.php');


    // Preparando a query SQL para selecionar os dados
    $sql = "SELECT nomedocurso, duracao, datainicio, datatermino, imagem FROM curso";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Saída dos dados de cada linha
        while($row = $result->fetch_assoc()) {
          
          echo "<div class='card'>";
          echo "<div class='card-header'>  " . $row["nomedocurso"] . "</div>";
          echo "<div class='p'> <img src='" . $row["imagem"] . "' alt='Imagem'><br>" . "</div>";
          echo "<div class='p'> Duração:  " . $row["duracao"]." meses </div>";
          echo "<div class='p'> Data ínicio: " . $row["datainicio"]. "</div>"; 
          echo "<div class='p'> Data termino: " . $row["datatermino"]. "</div>"; 
          echo '<a href="colab.html"><button>Selecione curso</button></a>';
          echo "</div>";  
            
        }
    } else {
        echo "0 resultados";
    }
 
    $conexao->close();
    ?>
    
</div>

  <footer>
    <div class="rodape">
      <div class="imagemrodape">
      <center><img src="midias/logo/logo wakeuphouse.png" width="40%"></center>
      </div>
      <div class="rodapetexto">
      <br> Endereço: Rua Visconde de Guarapuava (número)-Cancelli, Cascavel-PR<br>
           Contato: 
           <a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0">45 98804-3395</a><br>
           Gmail:WAKEUPHOUSE@gmail.com<br>
           <br>
           <a href="https://www.instagram.com/wakeuphouseoficial/">
           <img src="midias/logo/logoinstagram.png" width="50"></a>
           <a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0">
           <img src="midias/logo/logowhatsapp.png" width="50"><br></a>
           @Wake Up House
    </div>
    </div>
  </footer>
</body>
</html>