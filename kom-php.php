<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error.css">
    <title>Jet Broker Clients</title>
</head>
<body>
    <div class="box">
        <div class="text-box">
            <h1>Twoj komentarz został dodany</h1>
            <a href="kom.php"><h2>Zobacz swój komentarz</h2></a>
            <?php
            $dbname = "jetdatabase";
            $user = "root";
            $password = "";
            $host = "localhost";
                
                        $polaczenie = mysqli_connect($host, $user, $password, $dbname);
    


                        $zawartosc = $_POST["komentarz"];
                        $uzytkownik = $_POST['uzytkownik'];
                        echo("$zawartosc, $uzytkownik");
                        $dodaj = "INSERT INTO komentarze VALUES ('', '$zawartosc', '$uzytkownik')";
                        if (mysqli_query($polaczenie, $dodaj)) {
                       } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                       }
            ?>
            
        </div>
    </div>
</body>
</html>

