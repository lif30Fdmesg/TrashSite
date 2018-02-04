<?php
session_start();

session_unset();
session_destroy();

header("location:../index.php"); 

?>
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus | Odhlasit</title>
        <meta charset="utf-8">
        <meta lang="sk" name="description" content="strucny popis stranky">
        <meta lang="sk" name="keywords" content="klucove slova">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Artsiom Yanouski; e-mail: httpstyle@mail.ru">
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" media="screen">
        <!--[if IE]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <link rel="stylesheet" type="text/css" href="../_css/stylesIE.css" media="screen">
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
            
            <h1>Uspesne odhlaseny!</h1>
            
            
            </article>
        </main>
        <footer style="clear: right;">&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
