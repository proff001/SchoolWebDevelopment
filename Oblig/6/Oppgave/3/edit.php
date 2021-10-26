<!DOCTYPE html>
<html>
    <head>
        <title>Legg til sitat</title>
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="stylesheet" href="../../../4/Oppgave/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
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
                if(!empty($_POST["name"]) && !empty($_POST["sitat"])) {
                    $file = fopen("./sitater.txt", "a");
                    fwrite($file, $_POST["name"] . " : " . $_POST["sitat"] . "\n");
                    fclose($file);
                }
            }
        ?>
        
        <div id="content">
            <div id="container">
                <div id="title">Legge til sitat</div>
                <form action="./edit.php" method="POST" style="padding-top: 12px;">
                    <input type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;" require>
                    <input type="text" name="sitat" placeholder="Sitat" style="font-size: 1.8vh;" require>

                    <input value="Legg til" type="submit">
                </form>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>

        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>