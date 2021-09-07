<!DOCTYPE html>
<html>
    <head>
        <title>Tilbakemelding</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- Keeping for when i am developing further to avoid caching -->
        <link rel="stylesheet" href="../../../../style.css?<?=filemtime("../../../../style.css")?>"/>
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
            $weight = $height = $name = $male = $msg = '';

            function getBMI($height, $weight) {
                $calcBMI = round((($weight / $height) / $height)*10000, 2);
                return $calcBMI;
            };

            function safeInput($text) {
                $text = trim($text);
                $text = stripslashes($text);
                $text = htmlspecialchars($text);
                return $text;
            };

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST["gender"] == "male") {
                    $male = true;
                } else {
                    $male = false;
                }
                
                if(!empty($_POST["name"])) $name = safeInput($_POST["name"]);
                if(!empty($_POST["weight"])) $weight = (float)safeInput($_POST["weight"]);
                if(!empty($_POST["height"])) $height = (float)safeInput($_POST["height"]);

                $BMI = getBMI($height, $weight);

                if($BMI <= 18.5) {
                    $msg = ($male) ? "Flytt til amerika!" : "Ta deg en roadtrip i amerika.";
                } elseif($BMI > 18.5 && $BMI <= 25) {
                    $msg = ($male) ? "Du blir aldri bra nok!" : "";
                } elseif($BMI > 25 && $BMI <= 30) {
                    $msg = ($male) ? "Flytt hjem fra amerika!" : ".";
                } elseif($BMI < 30) {
                    $msg = ($male) ? "Begynn med heroin!" : "";
                };
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
                <?php echo "$name din BMI er $BMI"; ?>
                <?php echo $msg; ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>