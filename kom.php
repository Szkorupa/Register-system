<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="komentarz.css">
</head>
<body>
    <div id="hero">
        <div class="database-status">
            <?php
            $dbname = "jetdatabase";
            $user = "root";
            $password = "";
            $host = "localhost";

            $polaczenie = mysqli_connect($host, $user, $password, $dbname);
            if (!$polaczenie) {
                echo "<p>Nie połączono z bazą danych </p>";
                exit("Błąd połączenia z bazą danych");
            } else {
                echo "<p>Połączono z bazą danych</p>";
            }

                mysqli_close($polaczenie);
            ?>

        </div>

    <div class="down">
        <div class="login-box">
            <div class="title-box">
                <div class="login-title">
                    <h2>Komentarze</h2>
                </div>
            </div>
            
            <form class="part-box" method="POST">
                <div class="login-desc2">
                <?php
        $dbname = "jetdatabase";
        $user = "root";
        $password = "";
        $host = "localhost";

                    $polaczenie = mysqli_connect($host, $user, $password, $dbname);

            
            $records = $polaczenie->query(" SELECT komentarze.Zawartosc, komentarze.uzytkownik FROM komentarze");
                        while(list($zawartosc2, $uzytkownik2) = mysqli_fetch_row($records)){
                            echo $uzytkownik2 . "<br>" . $zawartosc2 . '<br>' . '<br>';
                        }
            mysqli_close($polaczenie);
        ?>
        
        </div>
        <br>
        <a href="main.php">Strona glowna</a>
        <a href="komentarz.php">Napisz swoj komentarz </a>
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>