
<?php

session_start();


?> 
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus | kontakty</title>
        <meta charset="utf-8">
        <meta lang="sk" name="description" content="strucny popis stranky">
        <meta lang="sk" name="keywords" content="klucove slova">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Artsiom Yanouski; e-mail: httpstyle@mail.ru">
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" media="screen">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhqNn96g8TcgPCRQ12syovat9wJj_Px6M&callback=initMap" type="application/javascript"></script>
        <script src="../_scripts/googleMaps.js" type="text/javascript"></script>
        <!--[if IE]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <link rel="stylesheet" type="text/css" href="../_css/stylesIE.css" media="screen">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhqNn96g8TcgPCRQ12syovat9wJj_Px6M&callback=initMap" type="application/javascript"></script>
            <script src="../_scripts/googleMaps.js" type="text/javascript"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <h1 style="display: none">Faucibus</h1>
            <a href="../index.php" title="hlavna"><img src="../_images/MRCkovo.png" title="MRC KOVO" alt="MRC KOVO"></a>
        </header>
        <nav role="navigation">
            <ul id="menu" role="menu">
                <li role="menuitem"><a href="../index.php" class="border">Hlavná stránka</a></li>
                <li role="menuitem"><a href="products.php" class="border">Produkty</a></li>
                <li role="menuitem"><a href="services.php" class="border">Výrobné možnosti</a></li>
                <li role="menuitem"><a href="machines.php" class="border">Stroje</a></li>
                <li role="menuitem"><a href="contact.php" class="border">Kontakt</a></li>
                <?php
                    if(isset($_SESSION["logged"])){
                        if($_SESSION["logged"]==1) echo "<li role=\"menuitem\"><a href=\"signout.php\">Odhlasit sa</a></li>";
                        else{           
                            echo "<li role=\"menuitem\"><a href=\"signup.php\" class=\"border\">Registracia</a></li>";
                            echo "<li role=\"menuitem\"><a href=\"signin.php\">Prihlasenie</a></li>";                 
                        }
                    }else{           
                        echo "<li role=\"menuitem\"><a href=\"signup.php\" class=\"border\">Registracia</a></li>";
                        echo "<li role=\"menuitem\"><a href=\"signin.php\">Prihlasenie</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <main role="main">
            <article role="article">
                <div id="map-canvas"></div>
                <h2 role="heading">Kontakt</h2>
                <h4>Adresa:</h4>
                        &emsp;EXAMPLE, s. r. o.<br>
                        &emsp;Slnecna 1070<br>
                        &emsp;014 01  Bytča<br>
                        <br>
                <h4>IČO:</h4>
                        &emsp;4123540 <br>
                        <br>
                <h4>DIČ:</h4> 
                        &emsp;2321546447 <br>
                        <br>
                <h4>IČ DPH:</h4> 
                        &emsp;SK65498762137 <br>
                        <br>
                <h4>E-mail:</h4> 
                        &emsp;example@gmail.com <br>
                <h4>Telefón:</h4> 
                        &emsp;+421 417 xxx xxx <br>
                <h4>Mobil:</h4> 
                        &emsp;+421 9xx xxx xxx <br><br><br>
                <?php
                    if(isset($_SESSION["logged"])){
                        if($_SESSION["logged"]==1){
                            
                            echo '<form action="post.php" method="post">';
                                echo '<textarea name="post_text" rows="10" cols="125"></textarea>';
                                echo "<br>";
                                echo '<input type="submit" value="Zaslat">';
                            echo '</form>';
                            
                        }
                    }
                    if(isset($_SESSION["logged"])){
                        if($_SESSION["logged"]==1 && $_SESSION["username"] == 'admin'){
                            
                            echo "<br>";
                            $user = "test";
                            $passwd = '0000';

                            $connect = mysqli_connect("localhost", $user, $passwd);
                            if(!$connect) die('Nepodarilo sa pripojit'.mysqli_connect_error());

                            mysqli_select_db($connect, "WWW") or die("Nepodarilo sa vybrat databazu");
                            
                            
                            $sql = "SELECT count(*) from post_admin";
                            $ret = mysqli_query($connect, $sql);
                            if (mysqli_num_rows($ret) > 0) {
                                $row = mysqli_fetch_row($ret);
                            }
                            $i = 0;
                            while($i < $row[0]){
                                
                                $sql = "SELECT name from post_admin limit $i, 1";
                                $ret = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_row($ret);
                                echo $row[0].":<br>";
                                $sql = "SELECT post from post_admin limit $i, 1";
                                $ret = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_row($ret);
                                echo $row[0]."<br>";
                                
                            }
                            
                            mysqli_close($connect);

                            
                        }
                    }
                ?>
                        
            </article>
        </main>
        <footer style="clear: right;">&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
