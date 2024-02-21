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
                    <h2>Komentarz</h2>
                </div>
            </div>
            
            <form class="part-box" action="kom-php.php" method="POST">
            <h3><label for="komentarz">Twój komentarz</label></h3>
            <input type="text" id="uzytkownik" name="uzytkownik">
                <div class="login-desc">
                    
                    <input type="text" id="komentarz" name="komentarz">
                </div>
                <button>Wyślij</button>
                <div id="komentarz1"></div>
            </form>
            
        </div>
        </div>
    </div>
</body>
</html>