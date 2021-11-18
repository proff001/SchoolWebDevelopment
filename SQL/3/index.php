<!DOCTYPE html>
<html>
    <head>
        <title>SQL Oblig 3</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="../../Oblig/4/Oppgave/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <style>
            #container {
                padding: 4vh;
            }

            th, td {
                padding: 8px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../../Oblig">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../">Hjem</a></div>
        </div>
        
        <div id="content">
            <div id="container">
                <form action="index.php" method="POST">
                    <div><b>Country Lookup</b></div>
                    <div style="display:flex; ">
                        <input type="text" name="name" placeholder="Navn på land" style="font-size:1.85vh;">
                        <input type="submit" name="" id="">
                    </div>
                </form>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(!empty($_POST["name"])) {
                            $SQL = new mysqli("localhost", "root", "", "intel");
                            
                            if($SQL->connect_error) {
                                die('Connection failed: ' . $SQL->connect_error);
                            }
                            
                            $res = $SQL->query('SELECT * FROM `cia` WHERE `name` LIKE "%' . $_POST["name"] . '%" ORDER BY `name`');
                            
                            if($res->num_rows > 0) {
                                echo '<table border=1 style="border-collapse: collapse;">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>Name</th>";
                                            echo "<th>Region</th>";
                                            echo "<th>Area (km²)</th>";
                                            echo "<th>Population</th>";
                                            echo "<th>GDP</th>";
                                        echo "</tr>";
                                    echo "</thead>";

                                    echo "<tbody>";
                                    while($row = $res->fetch_assoc()) {
                                        echo "<tr>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo "<td>" . $row["region"] . "</td>";
                                            echo "<td>" . $row["area"] . "</td>";
                                            echo "<td>" . $row["population"] . "</td>";
                                            echo "<td>" . $row["gdp"] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                echo "</table>";
                            }
                        }
                    }
                ?>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>