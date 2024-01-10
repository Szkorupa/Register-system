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
    
    $password = $_POST["password"];
    $user = $_POST["login"];


    $dodaj = "INSERT INTO users VALUES ('', '$user', '$password')";
    $zapytanie = mysqli_query($polaczenie, $dodaj);
    if (!$zapytanie === true) {
        echo "Klient nie został dodany";
    } else{
        header("Location: login.php");
        echo "Użytkownik " . $user . " " . "został dodany do bazy";
    }

    mysqli_close($polaczenie);
?>

<!-- działa -->

Stworzyć powiadomienia z mało liter i dużo liter.