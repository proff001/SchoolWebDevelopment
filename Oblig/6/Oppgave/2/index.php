<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 6 Oppgave 2</title>
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
                        
                        $counter = 0;
                        while(!feof($file)) {
                            $txt = fgets($file);

                            if(strlen($txt) > 2) {
                                $arr[$counter] = $txt;
                                $counter++;
                            }
                        }
                    
                        fclose($file);
                        
                        echo $arr[rand(0, count($arr)-1)];
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