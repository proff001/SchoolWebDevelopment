<!DOCTYPE html>
<html>
    <head>
        <title>Obliger</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <!-- <link rel="stylesheet" href="../style.css?<?=filemtime("../style.css")?>"/> -->
        <style>
            #container {
                width: fit-content;
                padding: 4vh;
            }
            
            ul {
                list-style: none;
            }
            
            ol {
                list-style-type: decimal;
                list-style-position: inside;
                padding: 0.5vh 0vh 2vh 3vh;;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../">Hjem</a></div>
        </div>
        
        <div id="content">
            <div id="container">
                <ul>
                    <li>
                        <a href="./1">Oblig 1</a>
                        <ol>
                            <li><a href="../">Startside for mine web-prosjekter</a></li>
                            <li>Deloppgaver</li>
                            <li>Eksternt Style Sheet</li>
                            <li>Internt style sheet</li>
                            <li>Inline style</li>
                            <li><a href="../style.css">Samlet CSS fil for oppgavene</a></li>
                        </ol>
                        <a href="./Template">Template</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>