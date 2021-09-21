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
                        <img src="./img/arrayLoopOver10.png" alt="">
                        
                        <li>Lag en løkke som beregner summen av alle tallene i arrayen, og skriver den ut til slutt</li>
                        <img src="./img/arrayLoopSum.png" alt="">
                        
                        <li>Lag en løkke som beregner gjennomsnittsverdien av alle tallene i arrayen, og skriver den ut til slutt</li>
                        <img src="./img/arrayLoopAverage.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle partall i arrayen</li>
                        <img src="./img/arrayLoopEven.png" alt="">
                        
                        <li>Lag en løkke som skriver ut alle oddetall i arrayen</li>
                        <img src="./img/arrayLoopOdd.png" alt="">
                    </ol>
                    
                    <li>Assosiativ Array</li>
                    <ol class="qAndA">
                        <li><b>Hvilken fordel er det at man bruker tekst i stedet for et nummer?</b></li>
                        <ul>Med assosiative arrays så er det enklere å vite hva entriesene er etter nøkkelordet istedenfor å gjette hva indeksen på det du er ute etter er.</ul>
                        
                        <li><b>Opprett en assosiativ array som håndterer prøveresultater. Hver elev/prøveresultat skal du ha håndtere følgende egenskaper: fornavn, etternavn, klasse, karakter, tidsforbruk.</b></li>
                        <img src="./img/assoArray.png" alt="">
                        
                        <li><b>Fyll inn fiktive verdier for 5 personer på to ulike måter</b> (Takk til Marius for å gi meg navn å legge inn)</li>
                        <img src="./img/assoArray5Entries.png" alt="">
                    </ol>
                    
                    <li>Array generator</li>
                    <ol class="qAndA">
                        <li><b>Lag en «array-generator» ved hjelp av en løkke. For hver runde i løkka skal du legge til en ny oppføring som inneholder et tilfeldig tall mellom 0 og 1000. Du skal ha 100 verdier i lista når den er ferdig</b></li>
                        <img src="./img/arrayGen.png" alt="">
                        
                        <li><b>Lag en ny løkke for å iterere arrayen du har laget, og lag kode for å finne ut høyeste verdi</b></li>
                        <img src="./img/arrayGenHighest.png" alt="">
                        
                        <li><b>Lag en ny løkke for å iterere arrayen du har laget, og lag kode for å finne ut minste verdi</b></li>
                        <img src="./img/arrayGenLowest.png" alt="">
                        
                        <li><b>Lag en ny løkke for å iterere arrayen du har laget, og lag kode for å finne ut hvor mange verdier som er mellom 0-499 og hva sier dette om fordelingen</b></li>
                        <ul>Etter å kjøre koden flere ganger var 40-60 av verdiene under 500 som da vil si at fordelingen på rand funksjonen er ganske bra</ul>
                        <img src="./img/arrayGenUnder500.png" alt="">
                        
                        <li><b>Ekstra oppgave: Vurdering av random funksjonen</b></li>
                        <ul>Etter å ha kjøry koden for å teste flere ganger (20-50 ganger) og endte opp med minimum 3 innenfor hver gruppe og maksimum 19 i hver gruppe.</ul>
                        <img src="./img/arrayRandTest.png" alt="">
                    </ol>
                    
                    <li>Multidimensjonal array</li>
                    <ol class="qAndA">
                        <li><b>Legg inn minimum 10 objekter i arrayen, komplett med alle egenskaper</b></li>
                        <img src="./img/mArray.png" alt="Bildet av multidimensjonale arrayen">
                        
                        <li><b>Lag en variabel som teller antall elementer i arrayen din</b></li>
                        <img src="./img/mArraySize.png" alt="Bildet av loopen for å telle antall elementes(egenskaper)">
                        
                        <li><b>Lag en løkke som traverserer arrayen din og skriver ut alle egenskaper pent formattert</b></li>
                        <img src="./img/mArrayLoop.png" alt="Bildet av loopen for å pent displaye objektene">
                    </ol>
                </ol>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>