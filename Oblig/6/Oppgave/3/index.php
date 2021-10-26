<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 6 Oppgave 3</title>
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <style>
            #container {
                padding: 4vh;
                display: flex;
                flex-direction: column;
                gap: 12px;
                min-width: 600px;
                max-width: 800px;
            }

            ul li {
                padding-bottom: 8px;
            }
            
            .button {
                width: fit-content;
                padding: 8px 12px 8px 12px;
                border: 1px solid gainsboro;
                text-align: center;
                border-radius: 5px;
                text-decoration: none;
                transition: all linear .05s;
            }

            .button:hover  {
                color: rgba(103, 62, 207, 0.8);
                border-color: rgba(103, 62, 207, 0.8);
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../../../">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../../../">Hjem</a></div>
        </div>

        <div id="content">
            <div id="container">
                <div style="font-weight: bold; font-size: 2vh;">Sitater:</div>

                <ul id="sitater">
                    <?php
                        if(filesize("./sitater.txt") > 0) {
                            $file = fopen("./sitater.txt", "r");
                            
                            
                            while(!feof($file)) {
                                echo "<li>" . fgets($file) . "</li>";
                            }

                            fclose($file);
                        } else {
                            echo "Ingen sitater lagret.";
                        };
                    ?>
                </ul>

                <a class="button" href="./edit.php">Legg til sitat</a>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>