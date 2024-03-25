<?php

if(isset(($_POST ['salvar'])))

{
    print_r()
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"],
        input[type="number"] {
            border-radius: 15px;
            border: 1px solid;
            padding: 12px;
            outline: none;
            margin-bottom: 10px;
            max-width: max-content;
        }

        input.InputSubmit {
            font-family: Arial, Helvetica, sans-serif;
            background-color: dodgerblue;
            color: white;
            font-size: medium;
            border-radius: 25px;
            border: none;
            outline: none;
            padding: 12px 20px;
            cursor: pointer;

        }

        input.InputSubmit:hover {
            background-color: blue;

        }

        img {
            max-width: 15%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 300px;
            display: block;


        }

        @media screen and (max-width: 768px) {
            body {
                padding: 30px;

            }

            img {
                display: block;
                max-width: 125px;
            }
        }
    </style>
</head>

<body>
    <img src="logo.png" alt="Logo" />

    <form action="cadastro2.php" method="post">
        
        <h2>Cadastro de Produtos</h2>

        <input type="text" list="itens" id="inputItens" placeholder="Produtos">
        <datalist id="itens">
            <option value="Fusivel 5 Amperes">
            <option value="Fusivel 7,5 Amperes">
            <option value="Fusivel 10 Amperes">
            <option value="Fusivel 15 Amperes">
            <option value="Fusivel 20 Amperes">
            <option value="Fusivel 25 Amperes">
            <option value="Fusivel 30 Amperes">
            <option value="Condutor Eletrico PP">
        </datalist>
        <input type="number" name="Quantidade" placeholder="Quantidade">
        <input class="InputSubmit" type="submit" name="Salvar" value="Salvar">
    </form>
</body>

</html>