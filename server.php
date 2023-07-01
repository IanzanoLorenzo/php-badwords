<?php
    $parola = $_POST['parola'];
    $paragrafo = $_POST['paragrafo'];
    $parolaLow = strtolower($parola);
    $arrayParola = explode(" ", $parolaLow);
    $paragrafoLow = strtolower($paragrafo);
    $arrayParagrafo = explode(" ", $paragrafoLow);
    $censoredArr = str_replace($arrayParola, "*****", $arrayParagrafo);
    $censoredPar = implode(" ", $censoredArr)
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
            <div class="col-6 offset-3 text-center card">
                <?php echo $paragrafo ?>
            </div>
            <div class="col-6 offset-3 text-end">
                <?php echo strlen($paragrafo) ?>
            </div>

            <div class="col-6 offset-3 text-center card">
                <?php echo $censoredPar ?>
            </div>
        </div>
    </div>
</body>
</html>