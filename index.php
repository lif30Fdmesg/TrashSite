<?php
session_start();
?>
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus</title>
        <meta charset="utf-8">
        <meta lang="sk" name="description" content="strucny popis stranky">
        <meta lang="sk" name="keywords" content="klucove slova">
        <meta name="robots" content="index,follow">
        <meta name="author" content="Artsiom Yanouski; e-mail: httpstyle@mail.ru">
        <link rel="stylesheet" type="text/css" href="_css/styles.css" media="screen">
        <!--[if IE]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <link rel="stylesheet" type="text/css" href="_css/stylesIE.css" media="screen">
        <![endif]-->
    </head>
    <body>
        <header>
            <h1 style="display: none">Faucibus</h1>
            <a href="index.php" title="hlavna"><img src="_images/MRCkovo.png" title="MRC KOVO" alt="MRC KOVO"></a>
        </header>
        <nav role="navigation">
            <ul id="menu" role="menu">
                <li role="menuitem"><a href="index.php" class="border">Hlavná stránka</a></li>
                <li role="menuitem"><a href="_pages/products.php" class="border">Produkty</a></li>
                <li role="menuitem"><a href="_pages/services.php" class="border">Výrobné možnosti</a></li>
                <li role="menuitem"><a href="_pages/machines.php" class="border">Stroje</a></li>
                <li role="menuitem"><a href="_pages/contact.php" class="border">Kontakt</a></li>
                <?php
                    if(isset($_SESSION["logged"])){
                        if($_SESSION["logged"]==1) echo "<li role=\"menuitem\"><a href=\"_pages/signout.php\">Odhlasit sa</a></li>";
                        else{           
                            echo "<li role=\"menuitem\"><a href=\"_pages/signup.php\" class=\"border\">Registracia</a></li>";
                            echo "<li role=\"menuitem\"><a href=\"_pages/signin.php\">Prihlasenie</a></li>";                 
                        }
                    }else{           
                        echo "<li role=\"menuitem\"><a href=\"_pages/signup.php\" class=\"border\">Registracia</a></li>";
                        echo "<li role=\"menuitem\"><a href=\"_pages/signin.php\">Prihlasenie</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <main role="main">
            <article role="article">
                <h2 role="heading">O Nás</h2>
				<div id="mainText">
					<p>&emsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet lorem id quam luctus, quis porta velit feugiat. Pellentesque nisi nulla, condimentum sit amet viverra vitae, maximus at leo. Etiam in est eu sem blandit lobortis. In efficitur odio felis, ut iaculis neque consectetur ullamcorper. Ut ullamcorper leo elementum tempus aliquet. Maecenas ac massa a leo interdum vestibulum ac sodales mauris. Duis quis pretium eros, vitae vulputate metus. Quisque vehicula libero diam, et molestie nisi facilisis ut. In sit amet erat at libero aliquet viverra consequat in ante. Quisque non mauris sagittis, fringilla ante nec, blandit libero. In neque lacus, pulvinar imperdiet porttitor ut, luctus vitae metus. Aliquam a leo ac lectus pulvinar malesuada ut a dui.

Vestibulum interdum sapien urna, et mattis leo mollis quis. Sed vulputate, mi et pretium feugiat, risus nisl lobortis arcu, id rutrum velit felis quis tellus. Proin et nisi nulla. Curabitur ut pharetra nibh. Duis in est euismod, tempor quam eu, varius erat. Ut interdum felis sit amet erat elementum, eget rutrum ipsum iaculis. Curabitur tempor euismod nulla, id dignissim ante rhoncus malesuada. Aenean posuere sollicitudin leo, ac accumsan nunc convallis a. Praesent dapibus malesuada nisi, vel scelerisque nibh dictum volutpat. Phasellus vitae felis mattis, rhoncus nibh in, laoreet leo. Morbi consequat tellus sit amet interdum scelerisque. Vestibulum quis euismod lacus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis turpis, dictum hendrerit felis eget, venenatis placerat leo. Praesent venenatis sollicitudin imperdiet. Maecenas velit est, commodo id maximus vel, suscipit sit amet dui. Phasellus dignissim pellentesque nulla, sed auctor eros semper ac. Aenean hendrerit urna rutrum ipsum ornare, eu lacinia nisi consequat. Integer cursus sit amet ligula vitae tempus. Sed massa est, congue non lectus quis, fringilla aliquam orci. Morbi risus enim, fringilla vel mauris non, suscipit cursus metus. Nullam luctus justo nibh, in rutrum ipsum congue gravida. Proin ac nisl sed tortor ornare iaculis at fermentum lorem. </p>
					<p>&emsp; Integer risus lectus, ultricies in aliquet id, hendrerit id erat. Aliquam rutrum aliquam eros, sed dictum enim efficitur eget. Vestibulum pharetra tempor mollis. Donec felis tellus, gravida eget accumsan in, posuere ut urna. Nullam nec iaculis lorem. Donec id dolor purus. In vitae pharetra purus, eu aliquam quam. Ut venenatis neque vitae est laoreet, maximus rhoncus purus euismod. Curabitur sollicitudin ac leo vitae auctor. Pellentesque at lacus odio. Duis gravida scelerisque elit vitae bibendum. Vestibulum justo nisl, suscipit vel pretium nec, volutpat non augue.

Vivamus sollicitudin mauris sapien, ac imperdiet urna dapibus id. Nulla bibendum consectetur nisl, nec fermentum lorem tincidunt ac. In et finibus nibh, in gravida purus. Cras sodales venenatis justo, vel vestibulum tortor bibendum a. Maecenas et lobortis libero, ac suscipit odio. Morbi in sem sed tortor euismod gravida. Vestibulum et faucibus justo. </p>
				</div>
            </article>
        </main>
        <aside role="complementary">
            <h4>Kontakt</h4>
            <div>
                <p>
                    Telefón: +421 417 xxx xxx <br>
                    <br>
                    Mobil: +421 9xx xxx xxx<br>
                    <br>
                    E-mail: example@gmail.com
                </p>
            </div>
        </aside>
        <footer>&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
