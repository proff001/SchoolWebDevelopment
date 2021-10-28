<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 6 Oppgave 4</title>
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <style>
            #container {
                padding: 4vh;
                display: flex;
                flex-direction: column;
                gap: 12px;
            }
            
            th, td {
                padding: 8px;
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
                        <th>Poeng</th>
                    </thead>
                    <tbody>
                        <?php
                            if(filesize("./score.txt") > 0) {
                                $file = fopen("./score.txt", "r");
                                $scoreLowest = 100;
                                $scoreHighest = 0;
                                $scoreTotal = 0;
                                $scoreAmount = 0;

                                while(!feof($file)) {
                                    $data = explode(";", fgets($file));

                                    if(isset($data[1])) {
                                        if($data[1] > $scoreHighest) $scoreHighest = $data[1];
                                        if($data[1] < $scoreLowest) $scoreLowest = $data[1];
                                        $scoreTotal += $data[1];
                                        $scoreAmount++;
                                        
                                        echo "<tr>";
                                        echo "<td>" . trim($data[0]) . "</td>";
                                        echo "<td>" . trim($data[1]) . "</td>";
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>Ingen resultater lagret.</td>";
                                echo "<td>Ingen resultater lagret.</td>";
                                echo "</tr>";
                            };
                        ?>
                    </tbody>
                    <tfoot>
                        <?php
                            echo "<tr>";
                            echo "<td>Gjennomsnitt</td>";
                            echo "<td>" . round($scoreTotal/$scoreAmount, 2) . "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Høyeste</td>";
                            echo "<td>" . $scoreHighest . "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Laveste</td>";
                            echo "<td>" . $scoreLowest . "</td>";
                            echo "</tr>";
                        ?>
                    </tfoot>
                </table>


                <a class="button" href="./edit.php">Leg til resultat</a>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>