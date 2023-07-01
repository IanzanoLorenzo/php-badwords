<?php
    $parola = $_POST['parola'];
    $paragrafo = $_POST['paragrafo'];
    $parolaLow = strtolower($parola);
    $paragrafoLow = strtolower($paragrafo);
    $censoredPar = str_replace($parolaLow, "*****", $paragrafoLow)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo censurato</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php echo $paragrafo ?>
            </div>
            <div class="col-12 text-center">
                <?php echo $censoredPar ?>
            </div>
        </div>
    </div>
</body>
</html>