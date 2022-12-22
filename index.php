<?php
include_once __DIR__ . "/function.php";

$length = 0;
if (isset($_GET["length"])) {
    $length = $_GET["length"];
}

$repeat = 0;
if (isset($_GET["repeat"])) {
    $repeat = $_GET["repeat"];
}

$letters = isset($_GET["letters"]);
$number = isset($_GET["number"]);
$symbol = isset($_GET["symbol"]);

$password = passwordGen($length, $repeat, $letters, $number, $symbol);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container text-white text-center my-5">
        <div class="my-5">
            <h1 class="py-5">PHP Strong Password Generator</h1>
        </div>
        <div class="row">
            <div class="col-8 m-auto">
                <div class='alert alert-primary p-1 fs-5'>Password Generata: <?php echo $password ?></div>
                <form class="bg-white p-2 radius text-black" action="" method="GET">
                    <div class="d-flex mt-2">
                        <div class="fs-5">Lunghezza password:</div>
                        <input class="ms-3" type="text" name="length" placeholder="Es: 6">
                    </div>
                    <div class="d-flex my-4">
                        <div class="fs-5">Consenti ripetizioni:</div>
                        <div>
                            <div class="d-flex ms-4">
                                <input class="me-1" type="radio">
                                <div>si</div>
                            </div>
                            <div class="d-flex ms-4">
                                <input class="me-1" type="radio" name="repeat" value="0">
                                <div>no</div>
                            </div>
                            <div class="d-flex ms-4 mt-3">
                                <input type="checkbox" name="letters">
                                <div class="ms-1">Lettere</div>
                            </div>
                            <div class="d-flex ms-4">
                                <input type="checkbox" name="number">
                                <div class="ms-1">Numeri</div>
                            </div>
                            <div class="d-flex ms-4">
                                <input type="checkbox" name="symbol">
                                <div class="ms-1">Simboli</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 pt-2">
                        <button class="btn btn-primary me-1">Genera</button>
                        <button class="btn btn-secondary ms-1" href="index.php">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
