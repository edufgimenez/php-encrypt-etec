<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIPTOGRAFIA EM PHP</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h1>CRIPTOGRAFIA EM PHP</h1>
        <form method="post">
            <input type="text" name="inputString" placeholder="Digite a string" value="<?php echo $_POST['inputString'] ?? ''; ?>" required>
            <br>
            <input type="radio" name="method" value="md5" <?php echo !isset($_POST['method']) || $_POST['method'] == 'md5' ? 'checked' : ''; ?> required> MD5
            <input type="radio" name="method" value="sha1" <?php echo isset($_POST['method']) && $_POST['method'] == 'sha1' ? 'checked' : ''; ?> required> SHA1
            <input type="radio" name="method" value="password_hash" <?php echo isset($_POST['method']) && $_POST['method'] == 'password_hash' ? 'checked' : ''; ?> required> PASSWORD_HASH
            <br>
            <input type="submit" name="submit" value="Criptografar">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $inputString = $_POST['inputString'];
            $method = $_POST['method'];
            $hashedString = '';

            $hashedString = match ($method) {
                'md5' => md5($inputString),
                'sha1' => sha1($inputString),
                'password_hash' => password_hash($inputString, PASSWORD_DEFAULT),
                default => '',
            };

            echo "<p>String Criptografada: $hashedString</p>";

            if ($method == 'password_hash') {
                echo "<form method='post'>
                        <input type='hidden' name='hashedString' value='{$hashedString}'>
                        <input type='text' name='verifyString' placeholder='Digite a string para verificar' required>
                        <input type='submit' name='verify' value='Verificar'>
                      </form>";
            }
        }

        if (isset($_POST['verify'])) {
            $hashedString = $_POST['hashedString'];
            $verifyString = $_POST['verifyString'];

            if (password_verify($verifyString, $hashedString)) {
                echo "<p>String Criptografada: $hashedString</p>";
                echo "<p>Verificação bem-sucedida!</p>";
            } else {
                echo "<p>String Criptografada: $hashedString</p>";
                echo "<p>Falha na verificação!</p>";
            }
        }
        ?>
    </div>
    <footer>
        <p>Desenvolvido por Eduardo Gimenez &bull; 2024 &trade;</p>
    </footer>
</body>
</html>
