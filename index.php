<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - 05.03.24</title>
    <style>
        .table_head{font-weight: bold;}
        td{padding: 10px;}
        .formolaz{width: 600px; margin: auto;}
        input[name='imie'],input[name='nazwisko'],input[name='email']{width: 400px; height: 25px; margin: 10px;}
        input[name='submit']{float: right; background-color: orange; width: 80px;}
        .box{width: 600px;}
    </style>
</head>
<body>
    <div class="box">
        <?php include_once("polaczenie.php") ?>

        <div class="formolaz">
            <fieldset>
                <legend>Dodaj do bazy danych</legend>
                <form action="dodaj_dobazy.php" method="post">
                    <input type="text" name="imie" placeholder="Podaj imie" required />
                    <input type="text" name="nazwisko" placeholder="Podaj nazwisko" required />
                    <input type="email" name="email" placeholder="Podaj email" required />
                    <input type="submit" name="submit" placeholder="Dodaj">
                </form>
            </fieldset>
        </div>
        <br><hr>
        <?php
            $zapytanie = "SELECT imie, nazwisko, email From uczniowie";
            echo("<table border=1>");
            echo("<tr class='table_head'><td>Imie</td><td>Nazwisko</td><td>Email</td></tr>");
            foreach ($polaczenie->query($zapytanie) as $wiersz) {
                echo "<tr><td>".$wiersz['imie']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['email']."</td></tr>";
            }
            echo("</table>")
        ?>
    </div>
    <?php $polaczenie=null; ?>
</body>
</html>