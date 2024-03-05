<?php
include_once("polaczenie.php");
if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];

    echo "$imie, $nazwisko, $email";
    $dodaj = "INSERT INTO uczniowie(imie,nazwisko,email) VALUES ('$imie', '$nazwisko', '$email')";
    if ($polaczenie->query($dodaj)) {
        echo ("<br> Dodano do bazy danych");
        header("Refresh:3; url=index.php");
    }
    else {
        echo("Error");
        header("Refresh:3; url=index.php");
    }
}
else {
    echo("Error");
    header("Refresh:3; url=index.php");
}
$polaczenie = null;
?>