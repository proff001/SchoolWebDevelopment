<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 2</title>
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
                    <li><a href="./Oppgave/1">Tilbakemelding</a></li>
                    <li><a href="./Oppgave/2">BMI-Kalkulator</a></li>
                </ol>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>