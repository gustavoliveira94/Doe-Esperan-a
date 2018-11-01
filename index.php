<?php 
    include './classes/config.php';
    include './classes/orfanatos.class.php';
    // $n = 0 + $m;
    // $m = $p * 8;
    // $m = $m + $n;
    // $p = intval(@$_GET['p']);
    // $num_total = $orfanatos->getOrfanato();
    // $num_paginas = $num_total / $n;
 ?>
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
            <a href="#como-doar" id="scroll">
                <li>COMO DOAR</li>
            </a>
            <a href="#orfanatos" id="scroll">
                <li>ORFANATOS</li>
            </a>
            <a href="#cadastrar" id="scroll">
                <li>CADASTRE UM ORFANATO</li>
            </a>
        </nav>

        <div class="title">
            <h1>DOE ESPERANÇA.</h1>
            <p>Já pensou em ajudar orfanatos com roupas que você não utiliza mais, comidas e items básicos do dia a dia?
                <br> Não pense duas vezes, faça o bem!</p>
        </div>

        <div class="about" id="como-doar">
            <h2>SAIBA COMO DOAR</h2>
        </div>

        <div class="inform">
            <p>É muito fácil, basta acessar a área de orfanatos e procurar uma perto da sua casa. Você poderá entrar em contato
                antes ou verificar os dias e horários disponíveis para a doação.</p>
        </div>
    </header>

    <main class="donate">
        <div class="orphanage">
            <h2>ORFANATOS</h2>
        </div>
        <div class="states">
            <form>
                <select name="estado">
                    <option selected="" value="">Selecione o Estado (UF)</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapa">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceara">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhao">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Para">Pará</option>
                    <option value="Paraiba">Paraíba</option>
                    <option value="Parana">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piaui">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rondonia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="Sao Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
                    <input type="submit" value="Filtrar">
            </form>
        </div>
        <section class="box-orphanage" id="orfanatos">
                <ul>
                <?php
                if(isset($_GET['estado']) && !empty($_GET['estado'])) {
                    $estado = addslashes($_GET['estado']);
                    $orfanato = $orfanatos->getOrfanatosEstado($estado);

                    foreach ($orfanato as $o) {
                ?>
                    <li>
                        <div class="box">
                            <h3><?php echo utf8_encode($o['nome']) ?></h3>
                            <p class="info">Estado:</p>
                            <p><?php echo utf8_encode($o['estado']) ?></p>
                            <p class="info">Endereço:</p>
                            <p><?php echo utf8_encode($o['endereco']) ?></p>
                            <p class="info">Telefone:</p>
                            <p><?php echo $o['telefone'] ?></p>
                            <p class="info">E-mail:</p>
                            <p><?php echo $o['email'] ?></p>
                            <p class="info">Dias e Horários disponíveis:</p>
                            <p><?php echo utf8_encode($o['horario']) ?></p>                        
                        </div>
                    </li>
                <?php 
                } 
                } else if(!isset($_GET['estado']) && empty($_GET['estado'])) {

                    $orfanato = $orfanatos->getOrfanatos();

                    foreach ($orfanato as $o) {
                ?>
                    <li>
                        <div class="box">
                            <h3><?php echo utf8_encode($o['nome']) ?></h3>
                            <p class="info">Estado:</p>
                            <p><?php echo utf8_encode($o['estado']) ?></p>
                            <p class="info">Endereço:</p>
                            <p><?php echo utf8_encode($o['endereco']) ?></p>
                            <p class="info">Telefone:</p>
                            <p><?php echo $o['telefone'] ?></p>
                            <p class="info">E-mail:</p>
                            <p><?php echo $o['email'] ?></p>
                            <p class="info">Dias e Horários disponíveis:</p>
                            <p><?php echo utf8_encode($o['horario']) ?></p>                        
                        </div>
                    </li>
                <?php } } ?>
                </ul>

                <!-- <?php 
                    for($i = 0; $i < $num_total; $i++) {
                        ?>
                            <a href="index.php?p=<?php echo $i ?>"><?php echo $i + 1 ?></a>
                        <?php
                    }
                ?> -->
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