<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error.css">
    <title>Jet Broker Clients</title>
</head>
<body>
<?php
        $dbname = "jetdatabase";
        $user = "root";
        $password = "";
        $host = "localhost";

                    $polaczenie = mysqli_connect($host, $user, $password, $dbname);

            $zawartosc = mysqli_real_escape_string($polaczenie, $_POST["komentarz"]);
            $uzytkownik = mysqli_real_escape_string($polaczenie, $_POST["uzytkownik"]);
            $dodaj = "INSERT INTO komentarze VALUES ('', '$zawartosc', '$uzytkownik')";
            mysqli_close($polaczenie);
        ?>
    <div class="box">
        <div class="text-box">
            <h1>Twoj komentarz został dodany</h1>
            <a href="kom.php"><h2>Zobacz swój komentarz</h2></a>
        </div>
    </div>
</body>
</html>

