<?php
include "conexao.php";

$nome = "";

$telefone = "";

$email = "";

$assunto = "";

$descricao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
$nome = $_POST["nome"];

$telefone = $_POST["telefone"];

$email = $_POST["email"];

$assunto = $_POST["assunto"];

$descricao = $_POST["descricao"];

$sql = "INSERT INTO avisos

(Nome,Telefone, Email, Assunto, Descricao)

VALUES (:nome, :telefone, :email, :assunto , :descricao)";

$stmt = $pdo->prepare($sql);

$stmt->execute([

'nome' => $nome,

'telefone' => $telefone,

'email' => $email,

'assunto' => $assunto,

'descricao' => $descricao

]);

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inde.css">
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Iosevka+Charon:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
</style>
<body>
    <header>
            <img class="icone_site" src="img_icons/logo_50x50.png" alt="">
        <nav>
            <a class="info_cabe" href="#art_01">plano</a>
            <a class="info_cabe" href="#modali">Modalidade</a>
            <a class="info_cabe" href="#sobreNos">Sobre nós</a>
       </nav>
    </header>
    <div class="img_01">
        <div class="texto_img1">
            CONSTRUA SUA MELHOR VERSÃO
        </div>
    </div>
    <main>
        

        <section class="art_01" id="art_01">
            <!-- Planos -->
            <h2>PLANOS</h2>
            <div class="container">
                
            <div class="qd_planos" id="prata">
                <h1 style="margin-bottom: 0px;">PLANO</h1>
                <h2 style="margin-top: 10px;">PRATA</h2>
                <p class="preco" >
                    <span  class="moeda">R$</span> 40,00
                </p>
                <div class="din_inf">
                    <ul>
                        <li>Treine na unidade que escolheu</li>
                        <li>Acesso a todas as aulas coletivas</li>
                        <li>Matrícula grátis em 2 modalidades</li>
                        <li>Anuidade grátis</li>
                        <li>Sem fidelidade</li>
                    </ul>
                </div>
                <div class="espaco_botao">
                    <button class="botao_planos" onclick="location.href='page_pagamentoPrata.php'">matricula-se</button>
                </div>
            </div>
        
            <div class="qd_planos" id="gold">
                <h1 style="margin-bottom: 0px;">PLANO</h1>
                <h2 style="margin-top: 10px;">GOLD</h2>
                <p class="preco" >
                    <span class="moeda">R$</span> 65,00
                </p>
                <div class="din_inf">
                    <ul>
                        <li>Treine na unidade que escolheu</li>
                        <li>Acesso a todas as aulas coletivas</li>
                        <li>Leve 1 amigos para treinar</li>
                        <li>Matrícula grátis em 3 modalidades</li>
                        <li>Anuidade grátis</li>
                        <li>Sem fidelidade</li>
                    </ul>
                </div>
                <div class="espaco_botao">
                    <button class="botao_planos" onclick="location.href='page_pagamentoGold.php'">matricula-se</button>
                </div>
            </div>
            
            <div class="qd_planos" id="diamond">
                <h1 style="margin-bottom: 0px;">PLANO</h1>
                <h2 style="margin-top: 10px;">DIAMOND</h2>
                <p class="preco" >
                    <span  class="moeda" >R$</span> 90,00 
                </p>
                <div class="din_inf">
                    <ul>
                        <li>Treine na unidade que escolheu</li>
                        <li>Acesso a todas as aulas coletivas</li>
                        <li>Leve 5 amigos para treinar</li>
                        <li>Matrícula grátis em 5 modalidades</li>
                        <li>Anuidade grátis</li>
                        <li>Sem fidelidade</li>
                    </ul>
                </div>
                <div class="espaco_botao">
                    <button class="botao_planos" onclick="location.href='page_pagamentodiamond.php'">matricula-se</button>
                </div>
            </div>
            </div>
        </section>

        <section id="modali">
            <!-- Modalidade -->
            <h1>Modalidades</h1>
            <div class="conteiner_moda">
                <div class="moda" id="boxe" > 
                    <div class="legenda" >
                        <h1 id="info_legenda">BOXE</h1>    
                    </div>
                </div>

                <div class="conteiner_moda" >
                    <div class="moda" id="musculacao">
                        <div class="legenda">
                            <h1 id="info_legenda">MUSCULAÇÃO</h1>
                        </div>
                    </div>
                </div>

                <div class="conteiner_moda">
                    <div class="moda" id="pilates">
                        <div class="legenda">
                            <h1 id="info_legenda">PILATES</h1>
                        </div>
                    </div>
                </div>

                <div class="conteiner_moda" >
                    <div class="moda" id="natacao">
                        <div class="legenda">
                            <h1 id="info_legenda">NATAÇÃO</h1>
                        </div>
                    </div>
                </div>
            
                
            </div>
        </section>

        <section id="sobreNos" style="margin: 0px;">
            <h1>Sobre nós</h1>
            <div class="fundo_sobre_nos">
                <div class="imagem"></div>
                <div class="apressentacao">
                    <p>Nossa história começou há 30 anos, quando éramos apenas uma pequena academia, com poucos aparelhos e muita vontade de crescer, em uma simples garagem. Com muito trabalho, dedicação e amor pelo que fazemos, fomos evoluindo pouco a pouco, conquistando nosso espaço e transformando nossa estrutura. Hoje, somos muito mais do que uma academia: ensinamos muito além da musculação, transmitimos valores, incentivamos a superação e acreditamos na força da dedicação e da fé. São 30 anos de história, evolução e compromisso com a saúde e o bem-estar de cada aluno.</p>
                </div>
            </div>
        </section>

        <section>
            <h1>Fale conosco</h1>
            <div class="fundo_fale_conosco">
                <div class="fundo_formu">
                    <form action="index.php" method="post">
                        <input class="input_user" type="text" name="nome" placeholder="Nome" required>
                        <input class="input_user" type="number" name="telefone" placeholder="Telefone" required><br>
                        <input class="input_user" type="email" name="email" placeholder="Email" required>
                        <input class="input_user" type="text" name="assunto" placeholder="Assunto" required><br>
                        <textarea name="descricao" id="" placeholder="Descrição" maxlength="2000"></textarea><br><br>

                        <button class="botao_fale_con" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
        </main>
        <footer>
                <div class="info_footer01">
                    <h2>suporte</h2>
                    <ul>
                        <li>WHATSAAP : (11) 96677-0011</li>
                        <li>TELEFONE : (11) 5447-12334</li>
                        <li>CONTATO : TITAS@SUPORTETITANS.COM.BR</li>
                    </ul>
                </div>
                <div class="info_footer02">
                    
                </div>
                <div class="info_footer03">
                    <div class="info_redeS"> <img src="https://static.vecteezy.com/system/resources/previews/031/737/184/non_2x/facebook-icons-facebook-social-media-logo-free-png.png" alt=""></div>
                    <div class="info_redeS"> <img src="img_icons/instagram-apps-icon-free-png.webp" alt=""></div>
                    <div class="info_redeS"> <img src="img_icons/icons8-twitterx-50.png" alt="twitterx--v1"> </div>
                    <div class="info_redeS"> <img src="img_icons/icon_youtube_ofc.png" alt=""></div>
                    <div class="info_redeS"> <img src="img_icons/location.jpg" alt=""></div>
                </div>
        </footer>
    
</body>
</html>