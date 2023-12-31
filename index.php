<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body style="background-color: #3282F6">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="text-light my-2">STRONG PASSWORD GENERATOR</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-light rounded p-3 d-flex flex-row flex-wrap">
                    <div class="col-6">
                        <label for="length">Lunghezza Password</label>
                    </div>
                    <div class="col-6">
                        <form action="generatePassword.php" method="get">
                            <input type="number" name="length" id="length" class="w-50" min="8" max="27">
                            <button type="submit" class="btn btn-primary" value="Generate Password">Invia</button>
                        </form>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <?php
                        if (isset($_SESSION['generatedPassword'])) {
                            echo "<h2 class=' mt-4'>{$_SESSION['generatedPassword']}</h2>";
                            unset($_SESSION['generatedPassword']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>