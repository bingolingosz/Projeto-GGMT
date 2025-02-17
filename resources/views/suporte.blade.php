<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suporte</title>
  <link rel="stylesheet" href="css/suporte.css">
  <link rel="stylesheet" href="css/headerfooter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- HEADER -->
    <div class="principal">
        <a href="inicio"><img src="images/logoskayhub.png" alt="logo" width="200px"></a>

        <form action="" class="busca">
            <div class="pesquisar">
                <input type="text" placeholder="Pesquisar">
            </div>
        </form>

        <div class="icone">
            <a href="conecte"><i class="fa-solid fa-user"></i></a>
            <div class="iconeuser">
                <p>Olá, <a href="conecte">ENTRE</a> ou <br>
                    <a href="registro">CADASTRE-SE</a>
                </p>
            </div>
            <a href="#"><i class="fa-solid fa-cloud-arrow-up"></i></a>
        </div>
    </div>

    <header>
       <nav>
         <ul>
            <li><a href="inicio">INICIO</a></li>
            <li>|</li>
            <li><a href="sitespublicados">SITES</a></li>
            <li>|</li>
            <li><a href="indie">JOGOS</a></li>
            <li>|</li>
            <li><a href="sobrenos">SOBRE NÓS</a></li>
         </ul>
        </nav>
    </header>

  <!-- CONTEÚDO -->
   <div class="containercontactar">
    <div class="contact-container">
      <div class="form-section">
        <h2>Como podemos ajudar?</h2>
        <form id="contact-form">
          <input type="text" id="name" name="name" placeholder="Nome:" required />
          <input type="email" id="email" name="email" placeholder="Email:" required />
          <textarea id="message" name="message" placeholder="Mensagem:" required></textarea>
          <button type="submit">Enviar</button>
        </form>
      </div>
      <div class="image-section">
        <img id="random-image" src="" alt="Support Illustration">
      </div>
    </div>
   </div>

   <!-- FOOTER -->
    <footer>
        <ul>
            <li class="icons"><a href="#"><img src="images/icon instagram.png" alt="Instagram" width="30px"></a></li>
            <li class="icons"><a href="#"><img src="images/icon twitter.png" alt="Twitter" width="30px"></a></li>
            <li class="icons"><a href="#"><img src="images/icon linkedin.png" alt="linkedin" width="30px"></a></li>
            <li class="icons"><a href="#"><img src="images/icon github.png" alt="Github" width="30px"></a></li>
        </ul>

        <ul>
            <li><a href="inicio">Inicio</a></li>
            <li>|</li>
            <li><a href="equipe">Equipe</a></li>
            <li>|</li>
            <li><a href="suporte">Suporte</a></li>
        </ul>
        <p> Copyright &copy;2025 SkayHub. Todos os direitos reservados.</p>
    </footer>

<script src="js/suporte.js"></script>
</body>
</html>
