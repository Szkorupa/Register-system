<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error.css">
    <title>Roast Website</title>
</head>
<body>
    <div class="box">
        <div class="text-box">
        <?php
        $dbname = "jetdatabase";
        $user = "root";
        $password = "";
        $host = "localhost";

                    $polaczenie = mysqli_connect($host, $user, $password, $dbname);
            
            $password = $_POST["password"];
            $user = $_POST["login"];

            $dodaj = "INSERT INTO users VALUES ('', '$user', '$password')";
            $zapytanie = mysqli_query($polaczenie, $dodaj);
            if (!$zapytanie === true) {
                header("error2.php");
            } else{
                echo "<h1>Użytkownik " . $user . " " . "został dodany do bazy</h1>";
            }

            mysqli_close($polaczenie);
        ?>
            <a href="login.php"><h2>Logowanie</h2></a>
        </div>
    </div>
</body>
</html>