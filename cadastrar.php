<?php include './classes/config.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <title>Doe Esperança</title>
</head>

<body>

    <header>
        <nav class="menu">
            <a class="logo" href="index.php">DOE ESPERANÇA</a>
        </nav>

        <div class="title">
            <h1>DOE ESPERANÇA.</h1>
            <p>Já pensou em ajudar orfanatos com roupas que você não utiliza mais, comidas e items básicos do dia a dia?
                <br> Não pense duas vezes, faça o bem!</p>
        </div>
    </header>

    <main class="donate">
        <div class="register-orphanage">
            <h2>CADASTRAR ORFANATO</h2>
            <?php
            include './classes/orfanatos.class.php';

            if(isset($_POST['nome']) && !empty($_POST['nome'])) {

                $nome = addslashes($_POST['nome']);
                $estado = addslashes($_POST['estado']);
                $endereco = addslashes($_POST['endereco']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $horario = addslashes($_POST['horario']);

                $orfanato = $orfanatos->addOrfanato($nome, $estado, $endereco, $telefone, $email, $horario);

            }
            
            ?>
            <form method="post">
                <label for="nome">Nome:*</label>
                <input type="text" name="nome" placeholder="Digite o nome" required>
                <label for="estado">Estado:*</label>
                <select name="estado" required>
                    <option selected="" value="">Selecione o Estado (UF)</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
                <label for="endereco">Endereço:*</label>
                <input type="text" name="endereco"  placeholder="Digite o endereço" required>
                <label for="telefone">Telefone:*</label>
                <input type="tel" name="telefone"  placeholder="Digite o telefone" required>
                <label for="email">E-mail:</label>
                <input type="email" name="email"  placeholder="Digite o E-mail">
                <label for="horario">Dias e Horários disponíveis:*</label>
                <input type="text" name="horario"  placeholder="Digite o horário - Dia e Hora" required>
                <input type="submit" value="CADASTRAR">
            </form>
        </div>
        </section>

        <div class="help">
            <h2>Nos ajude a manter a plataforma!</h2>
            <a href="#">Clique aqui!</a>
        </div>
    </main>
    <footer>
        <div class="content-footer">
            <div class="register" id="cadastrar">
                <h3>Quero Cadastrar um Orfanato!</h3>
                <a href="cadastrar.php">CADASTRAR</a>
            </div>
            <div class="fb">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="300" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
        <hr>
        <div class="development">
            <p>Desenvolvido com muito
                <i class="far fa-heart"></i> por
                <a target="_blank" href="https://github.com/gustavoliveira94">Gustavo Oliveira</a>
            </p>
        </div>
    </footer>

    <script src="js/app.js"></script>
</body>

</html>