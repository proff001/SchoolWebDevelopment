<!DOCTYPE html>
<html>
    <head>
        <title>Edit Sitat</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../../../style.css?<?=filemtime("../../../../style.css")?>"/>
        <link rel="stylesheet" href="../../../2/Oppgave/style.css?<?=filemtime("../../../2/Oppgave/style.css")?>"/>
        <style>
            #container {
                padding: 4vh;
            }

            form select {
                padding: 0.2vh;
                width: 98%;
                margin: auto;
                font-size: 1.8vh;
                background: #333;
                border-radius: 0.4vh;
                border-width: 0.1vh;
                border-style: solid;
                border-color: rgba(255, 255, 255, 0.4);
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

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if(!empty($_POST["name"]) && !empty($_POST["karakter"])) {
                    $file = fopen("./karakterer.txt", "a");
                    fwrite($file, $_POST["name"]);
                    fwrite($file, ";");
                    fwrite($file, $_POST["karakter"]);
                    fwrite($file, "\n");
                    fclose($file);
                }
            }
        ?>
        
        <div id="content">
            <div id="container">
                <div id="title">Legge til prøveresultat</div>
                <form action="./edit.php" method="POST" style="padding-top: 12px;">
                    <input type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;" require>
                    
                    <select name="karakter" require>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                    <input value="Legg til" type="submit">
                </form>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>