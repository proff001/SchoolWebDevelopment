<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CO2 Regnskap for min bil</title>
    </head>
    <body style="height:100vh; display:flex; align-items:center; justify-content:center; flex-direction: column; gap: 20px;">
        <div style="font-weight:bold;">
            CO2 Regnskap for min bil
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(!empty($_POST["brand"])) {
                        echo " av typen: " . $_POST["brand"];
                    }
                }
            ?>
        </div>

        <form action="./co.php" method="POST" style="display:flex; flex-direction: column; gap: 8px;">
            <select name="brand" require>
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Lexus">Lexus</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Nissan">Nissan</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Porsche">Porsche</option>
                <option value="Renaute">Renatue</option>
                <option value="Saab">Saab</option>
                <option value="Skoda">Skoda</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>

            <br>

            <div style="display:flex; flex-direction:column;">
                Bilens oppgite CO2 Utslipp pr. mil<input type="number" name="co2" min="0.01" max="8.00" value="2.45" step="0.01" require>
            </div>

            <div style="display:flex; flex-direction:column;">
                Årlig kjørelengde i km<input type="number" name="milage" min="1" max="80000" value="12000" require>
            </div>

            <div style="display:flex; flex-direction:column;">
                Antall år du vil beholde bilen<input type="number" name="years" min="1" max="50" value="5" require>
            </div>
            
            <input type="submit">
        </form>

        <div style="text-align:center;">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(!empty($_POST["brand"]) && !empty($_POST["co2"]) && !empty($_POST["milage"]) && !empty($_POST["years"])) {
                        echo "Bilen av merke " . $_POST["brand"] . " med utslipp pr. mil på " . $_POST["co2"] . "<br>";
                        echo "vil slippe ut så mye i løppet av årene du beholder bilen: <br><br>";
                        
                        $yearlyCO2 = ($_POST["milage"] / 10) * $_POST["co2"];
                        $total = $yearlyCO2 * $_POST["years"];

                        for($i = 0; $i < $_POST["years"]; $i++) {
                            echo $i + 1 . " : " . $yearlyCO2 . "<br>";
                        }

                        echo "<br>Totalen for alle år er $total";
                    }
                }
            ?>
        </div>
    </body>
</html>