<?php
include('config.php');

if(isset($_POST['botao_salvar'])) { // Verifica se o formulário foi submetido
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['ctelefone'];
    $rua = $_POST['rua'];
    $numero_endereco = $_POST['numero_endereco'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    // Adiciona aspas simples ('') para valores de string na consulta SQL
    $query = "INSERT INTO cliente (nome, data_nascimento, cpf, telefone, rua, numero_endereco, cidade, uf)  
        VALUES ('$nome', '$data_nascimento', '$cpf', '$telefone', '$rua', '$numero_endereco', '$cidade', '$uf')";
    $result = mysqli_query($connection, $query);
    
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Registration</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { width: 300px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="date"], input[type="tel"] { width: 100%; padding: 5px; }
        input[type="submit"] { margin-top: 15px; }
    </style>
</head>
<body>
<main>
<title>Pet Shop - Tutor Cadastro</title>
    <style>
        body {
            font-family: sans-serif;
        }
        header h1 {
            font-size: 2em;
            margin: 0;
        }
        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: black;
        }
        main {
            padding: 20px;
        }
        main h2 {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        fieldset {
            border: none;
        }
        legend {
            font-weight: bold;
            padding-bottom: 10px;
        }
        .form-field {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-actions {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        /* Alterações para deixar o formulário mais parecido com a imagem */
        body {
            font-family: "Times New Roman", serif;
        }
        header {
            background-color: #e0e0e0;
        }
        .form-field {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="date"],
        input[type="tel"] {
            border-width: 2px;
        }
        .form-actions {
            margin-top: 20px;
        }
        button {
            padding: 15px 30px;
            background-color: #388E3C;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
    <main>
        <h2>CADASTRO TUTOR</h2>
        <form id="tutor-form">
            <fieldset>
                <legend>Dados:</legend>
                <div class="form-field">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-field">
                    <label for="date-of-birth">Data de Nascimento:</label>
                    <input type="date" name="date-of-birth" id="date-of-birth" required>
                </div>
                <div class="form-field">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
                <div class="form-field">
                    <label for="cel">Celular:</label>
    </main>
</body>
</html>
