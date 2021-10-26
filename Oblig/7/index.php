<!DOCTYPE html>
<html>
    <head>
        <title>Oblig ?</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
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
            <?php include("./class_lib.php"); ?>
        </div>
        
        <div id="content">
            <div id="container">
                <?php
                    $elev01 = new Elev("Sander", 18, 12345678, "sanderc@viken.no", "3DAA", "Jon Myrvoll");
                    $elev02 = new Elev("Linus", 18, 12345678, "linusgy@viken.no", "3DAA", "Jon Myrvoll");
                    $elev03 = new Elev("Sebastian", 18, 12345678, "sebastiha@viken.no", "3DAA", "Jon Myrvoll");
                    $elev04 = new Elev("Thomas", 18, 46839956, "thomashol@viken.no", "3DAA", "Jon Myrvoll");
                    $elev05 = new Elev("Marius", 18, 12345678, "mariusjen@viken.no", "3DAA", "Jon Myrvoll");

                    echo $elev05->get_name();
                    $elev05->set_name("Marius J.");
                    echo $elev05->get_name();
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>