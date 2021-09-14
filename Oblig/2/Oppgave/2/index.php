<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 2 Oppgave 1</title>
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
            <div id="container" class="flexAlignCenter">
                <div id="title">BMI-Kalkulator</div>
                <form action="result.php" method="post" id="feedback">
                    <input id="name" type="text" name="name" placeholder="Navn" style="font-size: 1.8vh;">

                    <div class="gender">
                        Mann<input type="radio" name="gender" value="male" id="male" checked>
                        Kvinne<input type="radio" name="gender" value="female" id="female">
                    </div>

                    <div class="height">
                        <div id="heightLabel">Høyde: 165cm</div>
                        <input type="range" min="50" max="280" value="165" step="0.1" name="height" id="height">
                    </div>
                    
                    <div class="weight">
                        <div id="weightLabel">Vekt: 85kg</div>
                        <input type="range" min="10" max="160" value="80" step="0.01" name="weight" id="weight">
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