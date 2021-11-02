<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 7</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <style>
            #container {
                padding: 4vh;
            }

            th, td {
                padding: 8px;
                text-align: center;
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
            <?php include("./person.php"); ?>
        </div>
        
        <div id="content">
            <div id="container">
                <ol>
                    <li>The basics</li>
                    <ol class="qAndA">
                        <li><b>Forklar forskjellen på en klasse og et objekt.</b></li>
                        <ul>En klasse er en skisse mens et objekt er en byggning som er laget etter skissen.</ul>
                        
                        <li><b>Hvordan kan man inkludere en ny klasse på main-PHP siden?</b></li>
                        <ul>Hvis klassen er definert i en annen fil må vi importere den med include funksjonen.</ul>
                        
                        <li><b>Hvilket nøkkelord (key word) brukes for å lage et nytt objekt?</b></li>
                        <ul>new [navn på klassen]</ul>
                        
                        <li><b>Hvilken type funksjon bruker man når man skal endre et objekts egenskaper.</b></li>
                        <ul>En set funksjon.</ul>
                        
                        <li><b>Hvilken type funksjon bruker man for å se objektets egenskaper?</b></li>
                        <ul>En set funksjon.</ul>
                        
                        <li><b>Hva er en konstruktor?</b></li>
                        <ul>Konstruktor er en funksjon som er definert inne i en klasse og som kjørers når noen lager et nytt objekt fra den klassen. Denne funksjonen kan har variabler som kan bli brukt til å blant annet sette verdier på variablene i klassen.</ul>
                        
                        <li><b>Hvilke aksess nivåer har vi, og hvilken tilgang er det hver av dem gir?</b></li>
                        <ul></ul>
                        
                        <li><b>Hva er en subclass? Gi et eksempel på dette.</b></li>
                        <ul></ul>
                    </ol>
                        
                    <li>Terminologi innen OOP</li>
                    <ol class="qAndA">
                        <li><b>Hva betyr Polymorfisme?</b></li>
                        <ul></ul>

                        <li><b>Hva menes med Inheritance?</b></li>
                        <ul></ul>

                        <li><b>Hva betyr Encapsulation?</b></li>
                        <ul></ul>

                        <li><b>Hva betyr Data abstraction?</b></li>
                        <ul></ul>

                        <li><b>Hva er en Entitet?</b></li>
                        <ul></ul>
                    </ol>
                    
                    <li>Programmering</li>
                    <br>
                    <table border=1 style="border-collapse: collapse;">
                        <thead>
                            <th>Navn</th>
                            <th>Alder</th>
                            <th>Tlf</th>
                            <th>E-post</th>
                        </thead>
                        <tbody>
                            <?php
                                $arr = array(
                                    new Elev("Sander", 18, 12345678, "sanderc@viken.no", "1", "3DAA", "Jon Myrvoll"),
                                    new Elev("Linus", 18, 12345678, "linusgy@viken.no", "2", "3DAA", "Jon Myrvoll"),
                                    new Elev("Sebastian", 18, 12345678, "sebastiha@viken.no", "3", "3DAA", "Jon Myrvoll"),
                                    new Elev("Thomas", 18, 46839956, "thomashol@viken.no", "4", "3DAA", "Jon Myrvoll"),
                                    new Elev("Marius", 18, 12345678, "mariusjen@viken.no", "5", "3DAA", "Jon Myrvoll"),
                                );
                                
                                foreach($arr as $index => $person) {
                                    echo "<tr>";
                                    echo "<td>" . $person->get_name() . "</td>";
                                    echo "<td>" . $person->get_age() . "</td>";
                                    echo "<td>" . $person->get_mobile() . "</td>";
                                    echo "<td>" . $person->get_email() . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </ol>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>