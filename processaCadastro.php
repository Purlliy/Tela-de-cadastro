<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$experiencia = $_POST["experiencia"];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Informações do Cadastro</title>
</head>

<body class="w3-container w3-light-grey">
    <div class="w3-container w3-padding-32">

        <header class= "w3-center w3-teal w3-padding-32">
                <h1 class="w3-xxxlarge"><b>Informação do Cadastro</b></h1>
        </header>
            <div class="w3-container">
                <p>Nome Completo: <?php echo $nome; ?> </p>

                <p>Idade: <?php echo $idade; ?> anos. </p>

                <p>Profissão: <?php echo $profissao; ?> </p>

                <p>Salário Pretendido: <?php echo "R$" . $salario ?> </p>

                <p>Experiência: <?php echo $experiencia; ?> </p>

            <h2>Mensagem especial</h2>

                <p>
                    Olá, <?php echo $nome; ?>, seja bem-vindo(a)!
                    Nos orgulhamos de ter você no cadastro para a profissão de <?php echo $profissao; ?>.

                    Sua(s) experiência(s) anterior(es) foram: <?php echo $experiencia; ?>.

                    e o salário desejado é de R$ <?php echo $salario ?>. <br>

                    Entraremos em contato com você em breve caso seja contratado(a) para a vaga.
                    Enquanto isso desejamos uma boa sorte em seu ramo profissional e que você tenha sucesso em sua carreira.
                </p>
            
                    <a href="cadastro.html" class="w3-button w3-teal w3-round">
                        Voltar para o formulário
                    </a>
            </div>
    </div>
</body>
</html>
    