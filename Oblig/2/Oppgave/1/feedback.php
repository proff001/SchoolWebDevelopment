<!DOCTYPE html>
<html>
    <head>
        <title>Tilbakemelding</title>
        <link rel="stylesheet" href="../../../../style.css">
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
        <?php
            $error = "Takk for din tilbakemelding!";
            $name = $msg = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(!empty($_POST["name"])) $name = safeInput($_POST["name"]);
                if(!empty($_POST["msg"])) $msg = safeInput($_POST["msg"]);

                if(!preg_match("/^[a-å A-Å \s .\-]+$/", $name) || !preg_match("/^[a-å A-Å \s .?\/!-#&@,]+$/", $msg)) {
                    $error = "Det var en feil i formatet i tilbakemeldingen din!";
                } else {
                    ucfirst($msg);
                    $msg = wordwrap($msg, 75);
                    mail('thommhole@gmail.com', 'Tilbakemelding', $msg);
                };
            };

            function safeInput($text) {
                $text = trim($text);
                $text = stripslashes($text);
                $text = htmlspecialchars($text);
                return $text;
            };
        ?>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../../../">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../../../">Hjem</a></div>
        </div>
        
        <div id="content">
            <div id="container">
                <?php echo $error; ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>