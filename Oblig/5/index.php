<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 5</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../style.css?<?=filemtime("../../style.css")?>"/>
        <style>
            #container {
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
                    <li>Deklarasjon av en funksjon</li>
                    <ol class="qAndA">
                        <li><b>Forklar hvordan man definerer en funksjon i php. Alle deler i funksjonsdeklarasjonen må beskrives med navn</b></li>
                        <ul>En funksjon er definert med 4 deler funksjons prefix, funksjons navn, argumenter(hvis man trenger det) og koden som skal kjøres.</ul>
                        <img src="./img/functionDefinition.png" alt="Bildet av de 4 delene av en funksjon">
                    
                        <li><b>Forklar hvordan man gjennomfører et funksjonkall</b></li>
                        <ul>Når man skal bruke en funksjon må man kalle den ved å bruke funksjonsnavnet og eventuele argumenter som i bilder under.</ul>
                        <img src="./img/functionCalling.png" alt="Bildet av hvordan man kaller en funksjon">
                    </ol>

                    <li>Lage en funksjon uten argumenten</li>
                    <ol><img src="./img/functionWithoutArguments.png" alt="En fuknsjon uten argumenter"></ol>
                    
                    <li>Lage en funksjon med et argument</li>
                    <ol><img src="./img/functionOneArgument.png" alt="En funksjon med et argument"></ol>
                    
                    <li>Lage en funksjon med to argumenter</li>
                    <ol><img src="./img/functionTwoArguments.png" alt=""></ol>
                    
                    <li>Lage en funksjon med flere argumenter</li>
                    <ol><img src="./img/functionMultipleArguments.png" alt=""></ol>
                    
                    <li>Funksjon: formatterTekst</li>
                    <ol class="qAndA">
                        
                    </ol>
                        
                    <li>Rekursive funksjon</li>
                    <ol><img src="" alt=""></ol>
                    
                    <li>Rekursiv funksjon</li>
                    <ol><img src="" alt=""></ol>
                </ol>

                <?php
                    
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>