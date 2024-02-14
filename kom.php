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
            
            <form class="part-box" action="kom.php" method="POST">
                <div class="login-desc2">
                <?php
        $dbname = "jetdatabase";
        $user = "root";
        $password = "";
        $host = "localhost";

                    $polaczenie = mysqli_connect($host, $user, $password, $dbname);

            $zawartosc = mysqli_real_escape_string($polaczenie, $_POST["komentarz"]);
            $uzytkownik = mysqli_real_escape_string($polaczenie, $_POST["uzytkownik"]);
            $dodaj = "INSERT INTO komentarze VALUES ('', '$zawartosc', '$uzytkownik')";
            $zapytanie = mysqli_query($polaczenie, $dodaj);
            $pdo = new PDO('mysql:host=localhost;dbname=jetdatabase', 'root');
                        $zapytanie = $pdo->query('SELECT zawartosc, uzytkownik FROM komentarze');
                        foreach ($zapytanie as $wiersz){
                            echo $wiersz['uzytkownik'] . "<br>" . $wiersz['zawartosc'] . '<br>' . '<br>';
                        }
            mysqli_close($polaczenie);
        ?>
        
        </div>
        <br>
        <a href="main.php">Strona glowna</a>
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>