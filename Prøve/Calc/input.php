<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kalkulator</title>
    </head>
    <body style="height:100vh; display:flex; align-items:center; justify-content:center;">
        <form action="./resultat.php" method="POST" style="display:flex; flex-direction: column; gap: 8px;">
            <div style="display:flex; flex-direction:column;">
                Tall 1:<input type="number" name="num1" value="250" step="any" require>
            </div>

            <div style="display:flex; flex-direction:column;">
                Tall 2:<input type="number" name="num2" value="500" step="any" require>
            </div>

            <select name="op">
                <option value="pluss">+</option>
                <option value="minus">-</option>
                <option value="multi">*</option>
                <option value="divide">/</option>
                <option value="powerOf">^</option>
            </select>

            <input type="submit">
        </form>
    </body>
</html>