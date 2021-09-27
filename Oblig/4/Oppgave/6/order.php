<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 4 Opgpave 6</title>
        <!-- <link rel="stylesheet" href="../style.css"> -->
        <!-- <link rel="stylesheet" href="../../../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../../../style.css?<?=filemtime("../../../../style.css")?>"/>
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
                <div id="title">Tilbakemelding</div>

                <?php
                    $name = "";
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(!empty($_POST["name"])) $name = safeInput($_POST["name"]);
                        
                        echo '<div id="title">Output</div>';
                        echo "<div>";

                        if(!preg_match("/^[a-å A-Å \s .\-]+$/", $name)) {
                            $name = "Det var en feil i formatet i tilbakemeldingen din!";
                            echo $name;
                        } else {
                            for($i = 0; $i < 5; $i++) {
                                echo ($i == 4) ? "$name" : "$name-";
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
    </body>
</html>