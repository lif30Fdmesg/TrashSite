<?php
session_start();
?>
<!doctype html>
<html lang="sk">
    <head>
        <title>Faucibus | Stroje</title>
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
                        <li id="tab1" role="menuitem"><a href=#tabPanel1>CNC SE520</a></li>
                        <li id="tab2" role="menuitem"><a href=#tabPanel2>BPH20</a></li>
                        <li id="tab3" role="menuitem"><a href=#tabPanel3>3HS-1200</a></li>
                        <li id="tab4" role="menuitem"><a href=#tabPanel4>FV4</a></li>
                        <li id="tab5" role="menuitem"><a href=#tabPanel5>SUI 32</a></li>
                        <li id="tab6" role="menuitem"><a href=#tabPanel6>HBP 260</a></li>
                        <li id="tab7" role="menuitem"><a href=#tabPanel7>Fo 6s</a></li>
                        <li id="tab8" role="menuitem"><a href=#tabPanel8>BK 5U TOS</a></li>
                        <li id="tab9" role="menuitem"><a href=#tabPanel9>RILON CUT 160</a></li>
                        <li id="tab10" role="menuitem"><a href=#tabPanel10>PTX 296</a></li>                        
                        <li id="tab11" role="menuitem"><a href=#tabPanel11>Volumec VT300</a></li>
                        <li id="tab12" role="menuitem"><a href=#tabPanel12>MIG 280G Rilon</a></li>
                        <li id="tab13" role="menuitem"><a href=#tabPanel12>FV32</a></li>
                    </ul>
                </div>
                <div id="containers">
                    <div id="tabPanel1" role="article">
                        <h2 class="ie">CNC Sústruh SE520 combi</h2>
                        <a href="../_images/Sustruh-CNC-SE_520combi.jpg" title="CNC-SE520"><img src="../_images/Sustruh-CNC-SE_520combi.jpg" role="img" alt="CNC-SE520"></a>
                        <p>- Sústruženie vnútorných i vonkajších valcových a guľových plôch, rezanie a upravovanie závitov vŕtanie stredových otvorov nerotačnými nástrojmi. Klasické hrubovanie alebo dokončovanie ako pre sústruženie výkonnými nástrojmi, tak aj pre rezanie vonkajších alebo vnútorných závitov.</p>
                        <p>- Vysoká presnosť stroja podľa STN ISO 1708 .</p>
                        <p>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Obežný priemer nad lôžkom:	520 mm<br>
                            <br>
                            &emsp;Maximálna dĺžka sústruženia:	1500 mm<br>
                            <br>
                            &emsp;Obežný priemer nad suportom: 520mm<br>
                            <br>
			    &emsp;Obežný priemer nad priečnym suportom: 270mm<br>
                            <br>
                            &emsp;Max. otáčky vretena:	2200 1/min<br>
                            <br>
                            &emsp;Riadiaci systém:	FANUC
                        </p>
                    </div>
                    <div id="tabPanel2" role="article">
                        <h2 class="ie">Rovinná magnetická brúska BPH20</h2>
                        <a href="../_images/BPH20.jpg" title="BPH20"><img src="../_images/BPH20.jpg" role="img" alt="BPH20.jpg"></a>
                        <p>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Max. dĺžka brúsenia : 630 mm <br>
                            <br>
                            &emsp;Max. šírka brúsenia : 220 mm<br>
                            <br>
                            &emsp;Upínacia plocha stolu : 200 x 630 mm <br>
                            <br>
                            &emsp;Max. výška brúsenia : 350 mm <br>
                        </p>
                    </div>
                    <div id="tabPanel3" role="article">
                        <h2 class="ie">Brúsenie otvorov na stroji 3HS-1200</h2>
                        <a href="../_images/3HS1200.jpg" title="3HS1200"><img src="../_images/3HS1200.jpg" role="img" alt="3HS-1200"></a>
                        <p>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Maximálne je možné pretočiť: 450mm<br>
                            <br>
                            &emsp;Dĺžka výbrusu: 200mm (dĺžka držiakov)
                        </p>
                    </div>
                    <div id="tabPanel4" role="article">
                        <h2 class="ie">Frézka FV 4</h2>
                        <a href="../_images/FV4.jpg" title="FV4"><img src="../_images/FV4.jpg" role="img" alt="FV4.jpg"></a>
                        <p>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;1 000 x 400 mm<br>
                        </p>
                    </div>
                    <div id="tabPanel5" role="article">
                        <h2 class="ie">Sústruh hrotový SUI 32/100044</h2>
                        <a href="../_images/SUI-32.jpg" title="SUI-32"><img src="../_images/SUI-32.jpg" role="img" alt="SUI-32"></a>
                        <p>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Obežný priemer nad lôžkom: 320 mm <br>
                            <br>
                            &emsp;Vzdialenosť medzi hrotmi: 1000 mm <br>
                            <br>
                            &emsp;Obežný priemer nad suportom: 180 mm <br>
                            <br>
                            &emsp;Výkon hlavného elektromotoru: 4 kW <br>

                        </p>
                    </div>
                    <div id="tabPanel6" role="article">
                        <h2 class="ie">Automatická pásová píla Behringer HBP 260</h2>
                        <a href="../_images/HBP-260.jpg" title="HBP-260"><img src="../_images/HBP-260.jpg" role="img" alt="HBP-260"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Maximálna hrúbka polotovar: d=250mm
                    </div>
                    <div id="tabPanel7" role="article">
                        <h2 class="ie">Frézka na ozubenie Fo 6s</h2>
                        <a href="../_images/Fo_6s.jpg" title="Fo_6s"><img src="../_images/Fo_6s.jpg" role="img" alt="Fo_6s"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
                            &emsp;Max. priemer frézovaného kolesa: 450 mm<br>
                            <br>
                            &emsp;Max. frézovaný modul: M6<br>
                            <br>
                            &emsp;Min. frézovaný modul: M1<br>
                    </div>
                    <div id="tabPanel8" role="article">
                        <h2 class="ie">Brúska na guľato BK-5U-TOS</h2>
                        <a href="../_images/BK-5U-TOS.jpg" title="BK-5U-TOS"><img src="../_images/BK-5U-TOS.jpg" role="img" alt="BK-5U-TOS"></a>
                            <ins>Technické údaje:</ins><br>
  <br>
                            &emsp;Max. dĺžka obrobku: 2000mm<br>
                            <br>
                            &emsp;Obežný priemer: 180mm<br>
                            <br>
                           
<!--                        -->
                    </div>
                    <div id="tabPanel9" role="article">
                        <h2 class="ie">Plazmová rezačka RILON CUT 160</h2>
                        <a href="../_images/CUT-160.jpg" title="CUT-160"><img src="../_images/CUT-160.jpg" role="img" alt="CUT-160"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
                        <p>
                            &emsp;Rezanie a drážkovanie všetkých elektricky vodivých materiálov.<br>
                            <br>
                            &emsp;Umožňuje rezať materiály: oceľ, nerez, hliník, liatina, meď, atď. do max. hrúbky 40 mm.<br>
                        </p>
                    </div>
                    <div id="tabPanel10" role="article">
                        <h2 class="ie">Pásová píla PTX 296</h2>
                        <a href="../_images/PTX-296.png" title="PTX-296"><img src="../_images/PTX-296.png" role="img" alt="PTX-296"></a>
                          
                            <br>
<!--                        -->
                    </div>
                    <div id="tabPanel11" role="article">
                        <h2 class="ie">Pneumatický závitorez Volumec VT300</h2>
                        <a href="../_images/VT300.jpg" title="VT300"><img src="../_images/VT300.jpg" role="img" alt="VT300"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
   <p>
                            &emsp;Stroje firmy VOLUMEC sú špičkou v oblasti závitorezných strojov a tvorby závitov.<br>
                            <br>
                            &emsp;Umožňuje rezať závity slepé i priechodzie.<br>
                        </p>
<!--                        -->
                    </div>
                    <div id="tabPanel12" role="article">
                        <h2 class="ie">MIG 280G Rilon</h2>
                        <a href="../_images/MIG-280-G.jpg" title="MIG-280-G"><img src="../_images/MIG-280-G.jpg" role="img" alt="MIG-280-G"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
                        <p>&emsp;Zvárací invertor MIG 280G Rilon je zvárací poloautomat novej generácie s technológiou IGBT.</p>
                    </div>
                    <div id="tabPanel13" role="article">
                        <h2 class="ie">Frézka zvislá FV 32</h2>
                        <a href="../_images/FV32.jpg" title="FV32"><img src="../_images/FV32.jpg" role="img" alt="FV32"></a>
                            <ins>Technické údaje:</ins><br>
                            <br>
                        <p>&emsp;Nástrojárska frézka s kompletným príslušenstvom pre obrábanie rôznych výrobkov z kovových i nekovových materiálov do rozmeru 370x170x320mm.</p>
                    </div>
                </div>
            </div>
        </main>
        <footer>&copy; link &#124; <a href="http://validator.w3.org/check?uri=referer">HTML5</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3</a>
        </footer>
    </body>
</html>
