function loginForms() {
    var login = document.getElementById("login").value;
    var password = document.getElementById("password").value;

    if (login == "admin" || password == "admin") {
        alert("Login i Hasło muszą zostać wypełnione!");
        return false;
    } else {
        alert("Login successful");
        window.location.href = "index.php";
    }
}