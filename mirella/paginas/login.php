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
  <?php
include_once('conexao.php');

// Verifica se houve um envio de formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Validação básica (adicione mais validações conforme necessário)
    if (empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Prepare a consulta SQL para evitar injeção
        $stmt = $conexao->prepare("SELECT * FROM funcionario WHERE email=? AND senha=?");
        $stmt->bind_param("ss", $email, $senha); // Assumindo que email e senha são strings

        // Executa a consulta
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Verifica o tipo de usuário
                if ($row['tipo'] == 1) {
                    // Login válido para administrador, redireciona para adm.php
                    header("Location: ../principal.php");
                } else {
                    // Login válido para outro tipo de usuário, redireciona para home
                    header("Location: cursos.php");
                }
            } else {
                echo "Email ou senha inválidos.";
            }
        } else {
            // Trata erros na execução da consulta
            echo "Erro ao realizar a consulta: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>


<body>

<h2>LOGIN</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" 
 required>

        <button type="submit">Entrar</button>
    </form>   

</body>
</html>

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