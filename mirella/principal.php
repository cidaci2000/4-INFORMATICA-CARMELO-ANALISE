<?php 
include("paginas/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=$_POST['nome'];
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

}


    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Wake Up House</title>
    <link rel="icon" type="image/png" sizes="32x32" href="páginas/imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="páginas/imagens/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="paginas/css/cssprincipal.css">
</head>

<body>
    <header>
      <div class="imagemlogo">
      <img src="paginas/midias/logo/wakeuphouse.png" width="50%">
    </div>
    
      <nav>
          <ul class="nav-list">
          <li><a href="paginas/cursos.php">Cursos</a></li>
          <li><a href="paginas/quemsomos.html">Quem Somos</a></li>
          <li><a href="paginas/login.php">Login</a></li>
          <li><a href="https://api.whatsapp.com/send/?phone=5545988043395&text&type=phone_number&app_absent=0">Contato</a></li>
          
        </ul>
      </nav>
    </header>
    <br>

    <!--carrossel-->
    <main class="main_content container">

        
      <section class="section-seu-codigo container">
          
          <div class="slideshow-container">
              <div class="slideshow fade">
                  <img src="paginas/midias/inicio.png" alt="slide">
              </div>
              <div class="slideshow fade">
                  <img src="paginas/midias/acesse.png" alt="Slide">
              </div>
              <div class="slideshow fade">
                  <img src="paginas/midias/1.png" alt="Slide">
              </div>
              <div class="slideshow fade">
                  <img src="paginas/midias/2.jpg" alt="Slide">
              </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
          </div>
  
          <div class="paginacao">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
          </div>
  
      </section><!--FECHA BOX HTML-->
  
  
  </main>
  
  
  
  <script src="js/jquery.js"></script>
  <script src="js/script.js"></script>
  
  <script type="text/javascript">
  
  let slides = document.querySelectorAll('.slideshow');
          let dots = document.querySelectorAll('.dot');
          let slideIndex = 1;
          let timeoutID;
  
          const showSlides = (n) => {
              let i;
  
              if (n > slides.length) {
                  slideIndex = 1;
              }
              if (n < 1) {
                  slideIndex = slides.length;
              }
  
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
  
              for (i = 0; i < slides.length; i++) {
                  dots[i].setAttribute('class', 'dot');
              }
  
  
              slides[slideIndex - 1].style.display = 'block';
              dots[slideIndex - 1].setAttribute('class', 'dot ativo');
              clearTimeout(timeoutID);
              timeoutID = setTimeout(autoSlides, 4000);
          };
  
          const plusSlides = (n) => {
              showSlides(slideIndex += n);
          };
  
          const currentSlide = (n) => {
              showSlides(slideIndex = n);
          };
  
          function autoSlides() {
              let i;
  
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
  
              slideIndex++;
              if (slideIndex > slides.length) {
                  slideIndex = 1;
              }
  
              for (i = 0; i < slides.length; i++) {
                  dots[i].setAttribute('class', 'dot');
              }
  
              slides[slideIndex - 1].style.display = "block";
              dots[slideIndex - 1].setAttribute('class', 'dot ativo');
              timeoutID = setTimeout(autoSlides, 4000);
          }
  
          autoSlides();
  
  </script>

  <br>
 
    <br>
    <div class="cursos">
        <h1>Nossos cursos:</h1>
        <div class="cursoss">
        <div class="curso1">
            <img src="paginas/midias/imagenscursos/culinaria.png" width="300px">
            Curso de Culinária Infantil<br>
            <button><a href="sobreculinariainfantil.html">Ver mais</a></button>
        </div>
        <div class="curso2">
            <img src="paginas/midias/imagenscursos/cursoedfinanceira/1ed.jpg" width="300px">
            Curso de Educação financeira<br>
            <button><a href="sobreedfinanceira.html">Ver mais</button>
        </div>
        <div class="curso2">
            <img src="paginas/midias/imagenscursos/curso culinária/1.JPG" width="300px">
            <br>Curso de Manicure e Pedicure<br>
            <button><a href="sobremaneped.html">Ver mais</a></button>
        </div>
        
    </div>
        <br><br><br><br><br><br><br>
      </div>
      <br>
  

    <!--Formulário de inscrição-->
    <div class="inscricao"><br>
      <div class="inscricao2">
          <form action="principal.php" method="post">
            <aside>
            <div class="formulario">
                <h1>Faça sua inscrição:</h1>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="nome">
              <label for="fone">Telefone:</label>
              <input type="text" id="telefone" class="input-padrao" required placeholder="(xx) xxxxx-xxxx" name="telefone">
              <label for="mail">Email:</label>
              <input type= "email" id= Email placeholder="nome@gmail.com" name="email"/>
              <label for= "nomecurso">Curso que deseja se inscrever: <label><br>
                  <select name="cursos"><br>
                    <option value="Culinária Infantil" value="Culinária Infantil">Culinária Infantl</option>
                    <option value="Educação Financeira" value="Educação Financeira">Educação financeira</option>
                    <option value="Bateria" value="Bateria">Bateria</option>
                    <option value="Manicure e pedicure" value="Manicure e pedicure">Manicure e pedicure</option>
                  </select>
              </div> 
              <div class="check">
              <input type="checkbox"> Aceito o 
                <a href="#">Termo de taxa de matrícula</a>
              </div>
              
            <div class="button">
                      <button type="submit">Enviar</button>
                    
                <br>
                </aside>
            </div>
        </form>

    </div>

    <!--Ródapé do site-->
    <footer>
    <div class="rodape">
      <div class="imagemrodape">
      <center><img src="paginas/midias/logo/logo wakeuphouse.png" width="40%"></center>
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