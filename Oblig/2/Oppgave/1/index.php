<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 2 Oppgave 1</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../../../style.css?<?=filemtime("../../../../style.css")?>"/>
        <link rel="stylesheet" href="../style.css?<?=filemtime("../style.css")?>"/>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../../../">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../../../">Hjem</a></div>
        </div>

        <?php
            $navn = $comment = "";

            function jsClass($func, $element, $class) {
                if($func == 'add') {
                    echo sprintf('<script>document.getElementById("%").classList.add("%");</script>', $element, $class);
                } elseif($func == 'remove') {  
                    echo sprintf('<script>document.getElementById("%").classList.remove("%");</script>', $element, $class);
                };
            };

            function safeInput($text) {
                $text = trim($text);
                $text = stripslashes($text);
                $text = htmlspecialchars($text);
                return $text;
            };
        ?>
        
        <div id="content">
            <div id="container" class="flexAlignCenter">
                <div id="title">Tilbakemelding</div>
                <form action="feedback.php" method="post">
                    <input type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;" value="<?php echo $navn; ?>">
                    <textarea name="msg" cols="50" rows="10" placeholder="Tilbakemelding" style="font-size: 1.8vh;"><?php echo $comment; ?></textarea>
                    <input type="submit" name="submit" value="Send inn">
                </form>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>