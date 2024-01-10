<?php
$dbname = "jetdatabase";
$user = "root";
$password = "";
$host = "localhost";

$polaczenie = mysqli_connect($host, $user, $password, $dbname);
if (!$polaczenie) {
    exit("Błąd połączenia z bazą danych" . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = mysqli_real_escape_string($polaczenie, $_POST["login"]);
    $password = mysqli_real_escape_string($polaczenie, $_POST["password"]);

    $result = $polaczenie->query("SELECT * FROM users WHERE login = '$login' AND password = '$password'");

    if (mysqli_num_rows($result) > 0) {
        header("Location: main.php");
        exit;
    } else {
        header("Location: error.php");
    }
}

mysqli_close($polaczenie);
?>

<!-- działa do testu i konfiguracji -->