<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 4 Opgpave 2</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
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
                <div id="title">Oppgave 2</div>
                <form action="./" method="post" id="form">
                    <input id="name" type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;">
                    
                    <div class="radials">
                        <div class="radial">
                            1<input type="radio" name="times" value="1" id="male" checked>
                        </div>
                        
                        <div class="radial">
                            5<input type="radio" name="times" value="5" id="female">
                        </div>

                        <div class="radial">
                            10<input type="radio" name="times" value="10" id="female">
                        </div>
                    </div>
                    
                    <input type="submit" name="submit" value="Send inn">
                </form>
                
                <?php
                    $name = "";
                    $times = 0;

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(!empty($_POST["name"])) $name = safeInput($_POST["name"]);
                        if(!empty($_POST["times"])) $times = safeInput($_POST["times"]);
                        
                        echo '<div id="title">Output</div>';
                        echo "<div>";

                        if(!preg_match("/^[a-å A-Å \s .\-]+$/", $name)) {
                            $name = "Det var en feil i formatet i tilbakemeldingen din!";
                            echo $name;
                        } else {
                            for($i = 0; $i < $times; $i++) {
                                echo "$name <br>";
                            };
                        };
                        
                        echo "</div>";
                    };

                    function safeInput($text) {
                        $text = trim($text);
                        $text = stripslashes($text);
                        $text = htmlspecialchars($text);
                        return $text;
                    };
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>

        <script src="./script.js"></script>
    </body>
</html>