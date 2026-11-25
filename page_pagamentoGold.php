<?php
include 'conexao.php';

$nome = "";

$cpf = "";

$telefone = "";

$email = "";

$data= "";

$modalidade_1 = "";

$modalidade_2 = "";

$forma_pagamento = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
$nome = $_POST['nome'];

$cpf = $_POST['cpf'];

$telefone = $_POST['telefone'];

$email = $_POST['email'];

$data_nascimento = ['data_nascimento'];

$modalidade_1 = $_POST['modalidade_1'];

$modalidade_2 = $_POST['modalidade_2'];

$forma_pagamento = $_POST['pagamento'];



$sql = "INSERT INTO cadastro_aluno

(Nome, cpf, telefone, email, data_nascimento, modalidade_1, modalidade_2,forma_pagamento)

VALUES (:nome, :cpf, :telefone, :email, :data_nascimento , :modalidade_1, :modalidade_2, :forma_pagamento)";

$stmt = $pdo->prepare($sql);

$stmt->execute([

'nome' => $nome,

'cpf' => $cpf,

'telefone' => $telefone,

'email' => $email,

'data_nascimento' => $data_nascimento,

'modalidade_1' => $modalidade_1,

'modalidade_2' => $modalidade_2,

'forma_pagamento' => $forma_pagamento

]);

if($forma_pagamento =='Pix'){
    header("Location: PageQrcode.html");
}else{

    header("Location: matri_realizada.html ");
}
exit;

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Plano</title>
    <link rel="stylesheet" href="css/pagamentoGold.css">
</head>
<body>

    <!-- CABEÇALHO -->
    <header>
        <div class="logo-esquerda">
            <img src="img_icons/logo_50x50.png" alt="Logo">
        </div>

        <div class="logo-centro">
            
        </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <main>

        <a href="index.php" class="voltar">❮ Voltar</a>

        <section class="conteudo">

            <!-- FORMULÁRIO -->
            <div class="formulario" >

                <h2>compra de plano</h2>

                <form id="formu" action="page_pagamentoGold.php"  method="post">

                    <div class="campo">
                        <label for="nome">Nome completo</label>
                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            placeholder="Digite seu nome completo"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="cpf">Cpf</label>
                        <input
                            type="text"
                            name="cpf"
                            id="cpf"
                            placeholder="000.000.000-00"
                            maxlength="14"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="telefone">Telefone</label>
                        <input
                            type="tel"
                            name="telefone"
                            id="telefone"
                            placeholder="(00) 00000-0000"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="seuemail@gmail.com"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="nascimento">Data de nascimento</label>
                        <input
                            type="date"
                            name="data_nascimento"
                            id="nascimento"
                            placeholder="yyyy/mm/aa"
                            required
                        >
                    </div>

                    <select name="modalidade_1" class="Input_modalidade" required>
                    <option value="" disabled selected>Modalidades 1</option>
                    <option value="boxe">Boxe</option>
                    <option value="musculacao">Musculação</option>
                    <option value="pilates">Pilates</option>
                    <option value="natacao">Natação</option>
                    </select>

                    <select name="modalidade_2" class="Input_modalidade" required>
                    <option value="" disabled selected>Modalidades 2</option>
                    <option value="boxe">Boxe</option>
                    <option value="musculacao">Musculação</option>
                    <option value="pilates">Pilates</option>
                    <option value="natacao">Natação</option>
                    </select>

                    <button type="submit">
                        MATRICULE-SE
                    </button>

                </form>

            </div>

            <!-- DETALHES DA COMPRA -->

            <aside class="detalhes">

                <h3>Detalhes da compra</h3>

                <div class="linha">
                    <span>1 - Mensalidade</span>
                    <span>R$ 65,00</span>
                </div>

                <div class="linha">
                    <span>Taxa de adesão</span>
                    <span>Grátis</span>
                </div>

                <div class="linha">
                    <span>Plano</span>
                    <span class="plano">GOLD</span>
                </div>

                <div class="total">
                    <strong>Total da compra:</strong>
                    <strong>R$ 65,00</strong>
                </div>
                
                <div class="pagamento">
                    <strong>forma pagamento:</strong>
                    <select name="pagamento" form="formu" id="forma_pagamento" required>
                        <option value="" disabled selected>Forma de pagamento</option>
                        <option value="Pix">Pix</option>
                        <option value="cartao_credito">Cartão de crédito</option>
                        <option value="boleto">Boleto</option>
                    </select>
                </div>
                </aside>
        </section>

    </main>

<script>

const cpf = document.getElementById("cpf");

cpf.addEventListener("input", function() {

    let valor = cpf.value.replace(/\D/g, "").slice(0, 11);

    if (valor.length > 9) {
        valor = valor.replace(/^(\d{3})(\d{3})(\d{3})(\d{1,2})$/, "$1.$2.$3-$4");
    } 
    else if (valor.length > 6) {
        valor = valor.replace(/^(\d{3})(\d{3})(\d{1,3})$/, "$1.$2.$3");
    } 
    else if (valor.length > 3) {
        valor = valor.replace(/^(\d{3})(\d{1,3})$/, "$1.$2");
    }

    cpf.value = valor;

});
</script>
</body>
</html>
