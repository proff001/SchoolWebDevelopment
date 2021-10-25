<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 6 Oppgave 3</title>
        <!-- <link rel="stylesheet" href="../../style.css"> -->
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
            }
            
            th, td {
                padding: 5px;
                text-align: center;
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

                <table border=1 style="border-collapse: collapse;">
                    <thead>
                        <th>Navn</th>
                        <th>Karakter</th>
                    </thead>
                    <tbody>
                        <?php
                            if(filesize("./karakterer.txt") > 0) {
                                $file = fopen("./karakterer.txt", "r");
                                $karaktererLowest = 6;
                                $karaktererHighest = 1;
                                $karaktererTotal = 0;
                                $karaktererAmount = 0;

                                while(!feof($file)) {
                                    $data = explode(";", fgets($file));

                                    if(isset($data[1])) {
                                        if($data[1] > $karaktererHighest) $karaktererHighest = $data[1];
                                        if($data[1] < $karaktererLowest) $karaktererLowest = $data[1];
                                        $karaktererTotal += $data[1];
                                        $karaktererAmount++;
                                        
                                        echo "<tr>";
                                        echo "<td>" . trim($data[0]) . "</td>";
                                        echo "<td>" . trim($data[1]) . "</td>";
                                        echo "</tr>";
                                    }
                                }
                                
                                echo "<tr>";
                                echo "<td>Gjennomsnitt</td>";
                                echo "<td>" . $karaktererTotal/$karaktererAmount . "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>Høyeste karakter</td>";
                                echo "<td>" . $karaktererHighest . "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>Laveste karakter</td>";
                                echo "<td>" . $karaktererLowest . "</td>";
                                echo "</tr>";
                            } else {
                                echo "<tr>";
                                echo "<td>Ingen resultater lagret.</td>";
                                echo "<td>Ingen resultater lagret.</td>";
                                echo "</tr>";
                            };
                        ?>
                    </tbody>
                </table>


                <a class="button" href="./edit.php">Leg til resultat</a>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>