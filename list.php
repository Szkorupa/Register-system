<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Roast Website</title>
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
                    <h2>Roast Website</h2>
                </div>
            </div>
            
            <form class="part-box" action="logowanie.php" method="POST">
                <div class="login-desc">
                    <h3>Lista użytkowników</h3>
                </div>
                <?php
                    try{
                        $pdo = new PDO('mysql:host=localhost;dbname=jetdatabase', 'root');
                        $zapytanie = $pdo->query('SELECT idu, login, password FROM users');
                        foreach ($zapytanie as $wiersz){
                            echo $wiersz['idu'] . ' - ' . $wiersz['login'] . ' - ' . $wiersz['password'] . '<br>';
                        }
                    $pdo = null;
                    }
                    catch (PDOException){
                            echo "Błąd połączenia"; 
                        }
                ?>
            </form>
        </div>
        </div>
    </div>
</body>
</html>

<!-- działa, ale zrób z zapomniałem hasła liste wszystkich użytkowników -->