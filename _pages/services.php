<?php
session_start();
?>
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus | Výrobné možnosti</title>
        <meta charset="utf-8">
        <meta lang="sk" name="description" content="strucny popis stranky">
        <meta lang="sk" name="keywords" content="klucove slova">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Artsiom Yanouski; e-mail: httpstyle@mail.ru">
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" media="screen">
        <script src="../_scripts/script.js" type="text/javascript"></script>
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
            <div id="tabContainer">
                <div id="tabs" role="menu">
                    <ul>
                        <li id="tab1" role="menuitem"><a href=#tabPanel1>Cras</a></li>
                        <li id="tab2" role="menuitem"><a href=#tabPanel2>Donem</a></li>
                        <li id="tab3" role="menuitem"><a href=#tabPanel3>Lorem</a></li>
                        <li id="tab4" role="menuitem"><a href=#tabPanel4>Metus</a></li>
                        <li id="tab5" role="menuitem"><a href=#tabPanel5>Ante</a></li>
			<li id="tab6" role="menuitem"><a href=#tabPanel6>Neque</a></li>
                    </ul>
                </div>
                <div id="containers">
                    <div id="tabPanel1" role="article">
                        <h2 class="ie">Cras</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Cras"><img src="../_images/hotovyVyrobok.png" role="img" alt="Cras"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus metus purus, mollis auctor dui facilisis a. Donec tristique scelerisque aliquet. Nam orci quam, scelerisque tincidunt consequat suscipit, congue placerat est. Phasellus convallis lorem ante, ut maximus dolor fermentum eget. Quisque efficitur viverra auctor. Morbi maximus venenatis dictum. Donec varius gravida sollicitudin. Nulla facilisi. Vestibulum ut turpis non quam fringilla lobortis vel ut leo. Morbi iaculis lorem felis, nec cursus nisl ullamcorper ut. Duis ultrices augue ac malesuada vehicula. Mauris turpis purus, pulvinar eu nisi et, hendrerit egestas libero. Duis augue libero, vehicula non neque sit amet, vulputate iaculis ligula. Donec sagittis, dolor ac rutrum hendrerit, mauris lacus hendrerit lectus, eget pharetra ligula elit nec ante. </p>
                    </div>
                    <div id="tabPanel2" role="article">
                        <h2 class="ie">Donem</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Donem"><img src="../_images/hotovyVyrobok.png" role="img" alt="Donem"></a>
                        <p>Vestibulum id dui eget felis sollicitudin faucibus. Cras venenatis massa vel augue sodales ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut iaculis in sem sed porta. Proin euismod nisi eu nibh suscipit, quis rutrum purus commodo. Ut accumsan elementum lacus non euismod. Nam mollis venenatis libero at aliquet. Phasellus suscipit nulla in efficitur lacinia. Sed nec varius arcu, ut elementum purus. </p>
                    </div>
                    <div id="tabPanel3" role="article">
                        <h2 class="ie">Lorem</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Lorem"><img src="../_images/hotovyVyrobok.png" role="img" alt="Lorem"></a>
                        <p>Donec commodo lorem tortor, ac bibendum velit interdum ut. Cras at elit in neque pharetra finibus. Nulla orci lacus, cursus cursus elementum a, faucibus at ligula. Cras ut ex odio. Duis imperdiet sed quam at dictum. Integer quis laoreet justo. Vestibulum rutrum erat eget libero lobortis, ac feugiat tellus volutpat. Integer diam nunc, varius in mi quis, laoreet facilisis justo. Ut gravida viverra ipsum, et tempor mi vehicula non. Cras eget semper leo, ut molestie metus. Duis a tortor vitae tortor varius rhoncus. Curabitur vel convallis nibh, eu sodales nisi. Sed eget dui ullamcorper, tempus nulla nec, commodo enim. </p>
                    </div>
                    <div id="tabPanel4" role="article">
                        <h2 class="ie">Metus</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Metus"><img src="../_images/hotovyVyrobok.png" role="img" alt="Metus"></a>
                        <p>In tempus quam a hendrerit commodo. Donec aliquet eros nec tellus accumsan, id iaculis lectus consectetur. Donec nec congue eros. Cras laoreet efficitur massa et viverra. Etiam ultrices diam leo, a scelerisque nisi vulputate lacinia. Quisque non turpis lacus. Fusce dictum facilisis nibh ut tristique. Phasellus viverra lorem in aliquam volutpat. Integer semper felis quis metus rutrum eleifend. </p>
                    </div>
                    <div id="tabPanel5" role="article">
                        <h2 class="ie">Ante</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Ante"><img src="../_images/hotovyVyrobok.png" role="img" alt="Ante"></a>
                        <p>Nam laoreet sit amet libero vel luctus. Nam malesuada orci at scelerisque volutpat. Ut sit amet arcu urna. Curabitur egestas fermentum tincidunt. Nam mollis blandit nisl at sagittis. Vivamus eget pellentesque urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eget eros nibh. Nullam quis arcu ac elit aliquet luctus. Integer sollicitudin mauris mauris, nec sagittis tortor semper ac. Maecenas tempus, metus lacinia euismod fringilla, mauris libero cursus ipsum, eget faucibus enim nisl sed nibh. Donec dictum rutrum magna, a aliquam eros. Maecenas ultrices volutpat vehicula. Donec interdum turpis sit amet erat posuere vestibulum. Aenean et venenatis ipsum, ac accumsan quam. Ut consectetur feugiat aliquam. </p>
                    </div>
		     <div id="tabPanel6" role="article">
                        <h2 class="ie">Neque</h2>
                        <a href="../_images/hotovyVyrobok.png" title="Neque"><img src="../_images/hotovyVyrobok.png" role="img" alt="Neque"></a>
                        <p> In tempus quam a hendrerit commodo. Donec aliquet eros nec tellus accumsan, id iaculis lectus consectetur. Donec nec congue eros. Cras laoreet efficitur massa et viverra. Etiam ultrices diam leo, a scelerisque nisi vulputate lacinia. Quisque non turpis lacus. Fusce dictum facilisis nibh ut tristique. Phasellus viverra lorem in aliquam volutpat. Integer semper felis quis metus rutrum eleifend. </p>
                    </div>
                </div>
            </div>
        </main>
        <footer>&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
