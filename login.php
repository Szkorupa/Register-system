<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Jet Broker Clients</title>
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
                    <h2>Jet Database</h2>
                </div>
            </div>
            
            <form class="part-box" action="logowanie.php" method="POST">
                <div class="login-desc">
                    <h3>Zaloguj się</h3>
                </div>
                <div class="login-user">
                    <input type="text" placeholder="Login" id="login" name="login" required>
                </div>
                <div class="login-password">
                    <input type="password" placeholder="Hasło" id="password" name="password" required>
                </div>
                <div class="login-button">
                    <button onclick="loginForms()">Zaloguj</button>
                </div>

                <div class="login-register">
                    <a href="register.php"><h4>Zarejestruj</h4></a>
                    <a href=""><h4>Zapomniałem hasła</h4></a>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>

<!-- działa, ale zrób z zapomniałem hasła liste wszystkich użytkowników -->