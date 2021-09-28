<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 4 Opgpave 6</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../../../../style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
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
                <div id="title">Pizzabestilling</div>
                <form action="order.php" method="post" id="form">
                    <input id="name" type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;">
                    <input id="address" type="text" name="address" placeholder="Adresse" style="font-size: 1.8vh;">
                    
                    <div class="radials">
                        <div class="radial">
                            Levere<input type="radio" name="delivery" value="1">
                        </div>
                        
                        <div class="radial">
                            Hente<input type="radio" name="delivery" value="0" checked>
                        </div>
                    </div>
                    
                    <select name="type">
                        <option value="Pepperoni">Pepperoni</option>
                        <option value="King of the King">King of the King</option>
                        <option value="Ansjos og Ananas">Ansjos og Ananas</option>
                    </select>
                    
                    <label for="extra">Ekstra Ost:</label>
                    <div class="radials">
                        <div class="radial">
                            Ja<input type="radio" name="extra" value="1">
                        </div>
                        
                        <div class="radial">
                            Nei<input type="radio" name="extra" value="0" checked>
                        </div>
                    </div>

                    <input type="submit" name="submit" value="Send inn">
                </form>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>

        <script src="./script.js"></script>
    </body>
</html>