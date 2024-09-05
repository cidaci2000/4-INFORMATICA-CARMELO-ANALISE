<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Função para upload de imagem (com tratamento de erros)
    function uploadImagem($imagem) {
        $target_dir = "imagens/";
        $target_file = $target_dir . basename($imagem["name"]);

        if (move_uploaded_file($imagem["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Erro ao fazer upload da imagem.";
            return null;
        }
    }

    // Recebendo os dados do formulário
    $nomedocurso = $_POST['nomedocurso'];
    $duracao = $_POST['duracao'];
    $datainicio = $_POST['datainicio'];
    $datatermino = $_POST['datatermino'];
    $imagem = $_FILES["imagem"];
    

    // Upload da imagem
    $imagem_path = null;
    if (isset($imagem) && $imagem["error"] === 0) {
        $imagem_path = uploadImagem($imagem);
        if (!$imagem_path) {
            $erros[] = "Erro ao enviar a imagem.";
        }
    }

    // Verifica se o upload da imagem foi bem-sucedido
    if ($imagem_path) {
        // Preparando a query SQL com parâmetros para evitar injeção de SQL
        $stmt = $conexao->prepare("INSERT INTO curso (nomedocurso, duracao, datainicio, datatermino, imagem ) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nomedocurso, $duracao, $datainicio, $datatermino, $imagem_path);

        // Executando a query
        if ($stmt->execute()) {
            echo "Novos registros inseridos com sucesso";
        } else {
            echo "Erro ao inserir registros: " . $stmt->error;
        }

        $stmt->close();
    }

    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar curso| Wake Up House</title>
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
          <legend>Adicionar um novo curso:</legend>
  
              <br>
              <div class="textoformulario">
              <form action="cadastrarcurso.php" method="post" enctype="multipart/form-data">
            <aside>
                <div>
                    <label for="nomedocurso">Nome do curso:</label>
                    <input type="text" id="nomedocurso" name="nomedocurso" required>
                    <span id="nomedocurso-error" class="error"></span>
                </div>
                <div>
                    <label for="duracao">Duração:</label>
                    <input type="number" id="duracao" name="duracao" required>
                    <span id="duracao-error" class="error"></span>
                </div>
                <div>
                    <label for="datainicio">Data de início:</label>
                    <input type="date" id="datainicio" name="datainicio" required>
                    <span id="datainicio-error" class="error"></span>
                </div>
                <div>
                    <label for="datatermino">Data de término:</label>
                    <input type="date" id="datatermino" name="datatermino" required>
                    <span id="datatermino-error" class="error"></span>
                </div>
                <div>
                    <label for="imagem">Imagem do curso:</label>
                    <input type="file" id="imagem" name="imagem" accept="imagens/*" required>
                    <span id="imagem-error" class="error"></span>
                </div>
                <div class="button">
                    <button type="submit">Enviar</button>
                </div>
            </aside>
        </form>
                  <br>
          </div>
          </div>
      </fieldset>
</body>
</html>