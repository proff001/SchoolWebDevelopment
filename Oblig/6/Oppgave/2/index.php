<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 6 Oppgave 2</title>
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../../../style.css?<?=filemtime("../../../../style.css")?>"/>
        <style>
            #container {
                padding: 4vh;
                display: flex;
                flex-direction: column;
                gap: 12px;
                min-width: 600px;
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
                <div style="font-weight: bold; font-size: 2vh;">Random Sitat</div>

                <?php
                    $arr = array();
                    $sitat = "";
                    
                    if(filesize("../sitater.txt") > 0) {
                        $file = fopen("../sitater.txt", "r");
                        
                        $coutner = 0;
                        while(!feof($file)) {
                            $arr[$coutner] = fgets($file);
                            $coutner++;
                        }
                    
                        fclose($file);
                    
                        while(strlen($sitat) < 3) {
                            $sitat = $arr[rand(0, count($arr)-1)];
                        }
                        
                        echo $sitat;
                    } else {
                        echo "<p>Ingen sitater lagret. Gå til Oppgave 1 for å redigere sitater.</p>";
                    }
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>