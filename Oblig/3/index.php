<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 3</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../style.css?<?=filemtime("../../style.css")?>"/>
        <style>
            #container {
                width: fit-content;
                padding: 4vh;
            }
            
            ul {
                padding: 0.5vh 0vh 1vh 2vh;
            }
            
            ol {
                list-style-type: decimal;
                list-style-position: inside;
            }
            
            ol img {
                padding: 0vh 0vh 1vh 2vh;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../">Hjem</a></div>
        </div>
        
        <div id="content">
            <div id="container">
                <ol>
                    <li>True or False. (Variabel a = 3 og b = 5)</li>
                    <ol class="qAndA">
                        <li>true ($a < $b)</li>
                        <li>false ($a >= $b)</li>
                        <li>false ($a == $b)</li>
                        <li>false (3 != $a)</li>
                        <li>true (false == false)</li>
                        <li>true ($a + $b > 7)</li>
                        <li>false ($b % 3 > 3)</li>
                        <li>true ($b % 3 > 0)</li>
                    </ol>

                    <li>True or False. (Variabel a = 3, b = 5, c = 8 og d = false)</li>
                    <ol class="qAndA">
                        <li>false (($a > $b) && ($a+$b == $c))</li>
                        <li>true (($a > $b) || ($a+$b == $c))</li>
                        <li>true (!($a > $b))</li>
                        <li>true (!$d || false)</li>
                        <li>true (($a == 2 || $b == 5) && ($d != ($a < $b)))</li>
                        <li>false (($a > $b) && ((($a == 2 || $b == 5 ) && ($d != ($a < $b))) != ($d && $d)))</li>
                        <li>true (($a < $b) || ((($a == 2 || $b == 5) && ($d != ($a < $b))) != ($d && $d)))</li>
                    </ol>

                    <li>Lage logiske uttrykk</li>
                    <ol class="qAndA">
                        <li>$x != $y ($x ulik $y)</li>
                        <li>$x == $y ($x lik $y)</li>
                        <li>($x == $y) || ($y != $x) ($x lik $y ELLER $y ulik $x)</li>
                        <li>(($x == $y) && ($y == $z)) || ($z >= $x) ($x lik $y og $y lik $z, ELLER $z større enn eller lik $x)</li>
                        <li>(($x > $y) && ($y > $z)) ($x er større enn $y OG $y er større enn $z)</li>
                        <li>(($x == $y) && ($y == $z)) ($x er lik $y OG $y er lik $z)</li>
                    </ol>

                    <li>Numerisk Array, håndtering med løkker</li>
                    <ol class="qAndA">
                        <li>Lage array med 20 tallverdier</li>
                        <img src="./img/array.png" alt="">
                        
                        <li>La en foreach-løkke som skriver ut alle tall i arrayen</li>
                        <img src="./img/arrayLoop.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle tall som er mindre enn 25</li>
                        <img src="./img/arrayLoop25.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle tall mellom 10 og 40</li>
                        <img src="./img/arrayLoop10to40.png" alt="">
                        
                        <li>Lag en løkke som teller hvor mange av tallene som er større enn 10. Antallet tall større enn 10 skal skrives ut når løkka er ferdig</li>
                        <img src="./img/array.png" alt="">
                        
                        <li>Lag en løkke som beregner summen av alle tallene i arrayen, og skriver den ut til slutt</li>
                        <img src="./img/array.png" alt="">
                        
                        <li>Lag en løkke som beregner gjennomsnittsverdien av alle tallene i arrayen, og skriver den ut til slutt</li>
                        <img src="./img/array.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle partall i arrayen</li>
                        <img src="./img/array.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle oddetall i arrayen</li>
                        <img src="./img/array.png" alt="">
                    </ol>
                </ol>

                <?php 
                    $arr = array(1,2,3,4,11,12,13,14,21,22,23,24,31,32,33,34,41,42,43,44);

                    foreach($arr as $index => $value) {
                        if($value > 10 && $value < 40) {
                            echo "$index -> $value<br>";
                        }
                    }
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>