<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM funcionario WHERE idfuncionario LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM funcionario ORDER BY idfuncionario DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha conta|WakeUp House</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="stylesheet" href="css/cssareaADM.css">

</head>
<body>
  <header>
    <div class="imagemlogo">
		<img src="midias/logo/wakeuphouse.png" width="50%">
	  </div>
	  
		<nav>
			<ul class="nav-list">
			<li><a href="principal.php">Página Inicial</a></li>
			<li><a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0"">Contato</a></li>
		  </ul>
		</nav>
   </header>
  <aside class="esquerda">
  <br>
  <div class="dadosesquerda">
  
  <center>
  <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
  <button><a href="cadastrarcurso.php">Cadastrar curso</a></button><br><br><br>
  <button><a href="cadastraraluno.php">Cadastrar aluno</button><br><br><br>
  <button><a href="cadastrarfuncionario.php">Cadastrar Funcionários</a></button><br><br><br>
  <button><a href="#">Alunos</a></button><br><br><br>
  <button><a href="#">Funcionários</a></button><br><br><br>
  <button>Cursos existentes</button><br><br><br>
  <button><a href="sair.php" class="btn btn-danger me-5">Sair</a></button>
  </center><br>
  <footer class="rodapeesquerda">@WAKEUPHOUSE</footer>
</div>
  </aside>
  <aside class="direita">
  <div class="centro">
    Mirella
 
  <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idfuncionario']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['datadenascimento']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['formacao']."</td>";
                        echo "<td>".$user_data['redessociais']."</td>";
                        echo "<td>".$user_data['datadeinicio']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
  </div>
  </aside>
  <footer class="rodape">@WAKEUPHOUSE</footer>
</body>
</html>