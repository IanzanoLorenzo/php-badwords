<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div>
        <form action="server.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-6 offset-3 mt-5">
                        <input class="w-100" type="text" name="parola" placeholder="scrivi la parola">
                    </div>
                    <div class="col-6 offset-3 my-4">
                        <textarea class="w-100" name="paragrafo" cols="30" rows="10" placeholder="Scrivi un paragrafo"></textarea><br>
                    </div>
                    <div class="col-2 offset-7 text-end">
                        <button class="btn btn-primary" type="submit">Invia</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>