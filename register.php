<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
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
                exit("Błąd połączenia z bazą danych" . mysqli_connect_error());
            } else {
                echo "<p>Połączono z bazą danych</p>";
            }

                mysqli_close($polaczenie);
            ?>

<!-- Formularz logowania -->
        </div>

        <div class="down">
        <div class="login-box">
            <div class="title-box">
                <div class="login-title">
                    <h2>Roast Website</h2>
                </div>
            </div>
            
            <form action="addClient.php" class="part-box" method="POST">
                <div class="register-desc">
                    <h3>Zarejestruj Się</h3>
                </div>
                
                <div class="register-user">
                    <input type="text" placeholder="Login" name="login" required="">
                </div>
                <div class="register-password">
                    <input type="password" placeholder="Hasło"  name="password" required="">
                </div>
                <div class="register-button">
                    <button type="submit">Utwórz</button>
                </div>
                <div class="login-register">
                    <a href="login.php"><h4>Login</h4></a>
                    <a href="list.php"><h4>Zapomniałem hasła</h4></a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>


<!-- działa, ale zrób z zapomniałem hasła liste wszystkich użytkowników -->