<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
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
    <div class="containerregistro">
        <div class="containerregistro2">
            <h2>Registre-se</h2>
            <form action="/cadastro" method="post">
                @csrf {{-- Tem que ser obrigatório, ele gera um token único pra saber se foi enviado do próprio site --}}
                <label for="Nome:">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirmar-senha">Digite sua senha novamente:</label>
                <input type="password" id="confirmar-senha" name="confirmar-senha" required>

                <!-- <label for="campo-extra">Campo Extra:</label>
                <input type="text" id="campo-extra" name="campo-extra"> -->

                <button type="submit">Criar Conta</button>
            </form>
            <p><a href="conecte">Já possui conta?</a></p>
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
</body>
</html>
