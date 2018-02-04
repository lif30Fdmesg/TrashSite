<?php
session_start();


$user = "test";
$passwd = '0000';

$connect = mysqli_connect("localhost", $user, $passwd);
if(!$connect) die('Nepodarilo sa pripojit'.mysqli_connect_error());

mysqli_select_db($connect, "WWW") or die("Nepodarilo sa vybrat databazu");

$nickErr=$passErr=$logErr="";
$nickname=$password="";
$check = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $check=true;
    if(empty($_POST["nickname"])){
        $nickErr = "Musite zadat nick!";
        $check=false;
    }else  $nickname = $_POST["nickname"];
    if(empty($_POST["password"])){
        $passErr = "Musite zadat heslo!";
        $check=false;
    }else $password = sha1($_POST["password"]);
    
    
    if($check===true){
        $sql = "SELECT password from user where nickname = '$nickname'";
        $ret = mysqli_query($connect, $sql);
        if (mysqli_num_rows($ret) > 0) {
            $row = mysqli_fetch_assoc($ret);
        }else $check = false;
        if($check && !strcmp($row["password"], $password)){
            $_SESSION["logged"] = 1;
            $_SESSION["username"] = "$nickname";
        }else{
            $logErr = 'Nespravne uzivatelske meno alebo heslo!';
            $check = false;
        }
    }
    
}



mysqli_close($connect);
if ($check===TRUE) {
    header("location:../index.php"); 
}

?>
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus | Prihlasit</title>
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
            
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <span class="error"><?php echo $logErr;?></span><br>
                Nick: <input type="text" name="nickname"><br>
                Heslo: <input type="password" name="password"><br>
                <input type="submit" name="submit" value="Prihlasit"><br>
                
            </form>
            
            
            </article>
        </main>
        <footer style="clear: right;">&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
