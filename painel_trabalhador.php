<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>
</head>
<body>

    <h2>Dados Cadastrados</h2>

    <?php
    // Recebendo os dados enviados pelo formulário
    $nome1        = $_POST['nome1'];
    $idade2       = $_POST['idade2'];
    $profissao3   = $_POST['profissao3'];
    $salario4     = $_POST['salario4'];
    $experiencia5 = $_POST['experiencia5'];

    // Exibição dos dados linha por linha
    echo "<p><strong>Nome:</strong> " . $nome1 . "</p>";
    echo "<p><strong>Idade:</strong> " . $idade2 . " anos</p>";
    echo "<p><strong>Profissão:</strong> " . $profissao3 . "</p>";
    echo "<p><strong>Salário Pretendido:</strong> R$ " . number_format($salario4, 2, ',', '.') . "</p>";
    echo "<p><strong>Experiência Anterior:</strong> " . $experiencia5 . "</p>";
    
    echo "<hr>";

    // Mensagem personalizada utilizando as 3 variáveis obrigatórias
    echo "<p>Companheiro(a) <strong>$nome1</strong>, seu cadastro para <strong>$profissao3</strong> foi recebido com sucesso! Analisamos sua experiência em <em>\"$experiencia5\"</em> e concluímos: com esse currículo, a classe trabalhadora está mais forte do que nunca. Siga firme e bom trabalho!</p>";
    ?>

    <br>
    <a href="ficha_trabalhador.html"><button>Voltar ao Formulário</button></a>

</body>
</html>