<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verifica dati accesso</h1>

    <form action="accesso.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="eta">Età:</label>
        <input type="number" id="eta" name="eta" required>

        <button type="submit">Invia</button>
    </form>

    <?php


    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $eta = $_GET['eta'];


        $errori = [];

        if (strlen($nome) < 4) {
            $errori[] = "Nome deve essere lungo almeno 4 caratteri";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errori[] = "Email non valida (deve contenere @ e .)";
        }

        if (!is_numeric($eta)) {
            $errori[] = "Età deve essere un numero";
        }


        if (count($errori) > 0) {

            echo "<p class='error'>Accesso negato:</p>";
            echo "<ul>";
            foreach ($errori as $errore) {
                echo "<li>$errore</li>";
            }
            echo "</ul>";
        } else {

            echo "<p class='success'>Accesso riuscito!</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Età: $eta</p>";
        }
    }

    ?>

</body>
</html>
