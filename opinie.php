<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <div id="banner">
        <h1>Hurtownia spożywcza</h1>
    </div>
    <div id="content">
        <h2>Opinie naszych klientów</h2>
        <!--SKRYPT 1-->
        <?php
        
        $conn = mysqli_connect('localhost','root','','hurtownia');
        mysqli_query($conn, "set character set utf8");
        $q = mysqli_query($conn, 'SELECT klienci.zdjecie,klienci.imie,opinie.opinia FROM klienci JOIN opinie ON klienci.id=opinie.Klienci_id WHERE Typy_id = 2 OR 3');
        while($a = mysqli_fetch_array($q))
        {
            echo("<div class='opinia'>");

            echo("<img src='".$a['zdjecie']."' alt='klient'>");
            echo("<blockquote>".$a['opinia']."</blockquote>");
            echo("<h4>".$a['imie']."</h4>");

            echo("</div>");

        }
        mysqli_close($conn);
        ?>
    </div>
    <div id="stopka1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </div>
    <div id="stopka2">
        <h3>Nasi top klienci</h3>
        <ol>
            <!--SKRYPT 2-->
            <?php
        
        $conn = mysqli_connect('localhost','root','','hurtownia');
        mysqli_query($conn, "set character set utf8");
        $q = mysqli_query($conn, 'SELECT imie,nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;');
        while($a = mysqli_fetch_array($q))
        {
            echo("<li>".$a['imie']." ".$a['nazwisko'].", ".$a['punkty']." pkt.</li>");
        }
        mysqli_close($conn);
        ?>
        </ol>
    </div>
    <div id="stopka3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </div>
    <div id="stopka4">
        <h3>Autor: 01234567890</h3>
    </div>
</body>

</html>