<!DOCTYPE html>
<html>
    <head>
        <title>Tittel???</title>
        <!-- Aparently normal would not work 🤔 -->
        <!-- <link rel="stylesheet" href="./style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./style.css?<?=filemtime("./style.css")?>"/>
    </head>
    <body>
        <div id="header">
            <text id="title">Overskrift</text>
            <div id="navBar">
                <div class="flexAlignCenter menuItem"><a href="">Hjem</a></div>
                <div class="flexAlignCenter menuItem"><a href="./Oblig/">Oblig</a></div>
                <!-- <div class="flexAlignCenter menuItem">Hmm 3</div>
                <div class="flexAlignCenter menuItem">Hmm 4</div> -->
            </div>
        </div>
        <div id="content">
            <div>
                <p>
                    Minim quis dolore consectetur reprehenderit consequat proident occaecat qui. 
                    Ut veniam incididunt ut ex. Veniam incididunt incididunt veniam eiusmod labore consequat amet dolor culpa. 
                    Mollit anim aute labore velit pariatur deserunt tempor voluptate nulla qui aute ipsum do dolor. 
                    Ex consectetur ad culpa deserunt quis. In pariatur pariatur ipsum ad fugiat voluptate ipsum ipsum velit aute tempor. 
                    Amet reprehenderit eu ipsum est.Sint ipsum laboris ex mollit ipsum cupidatat. 
                    Veniam tempor voluptate in ad nulla exercitation irure incididunt qui. 
                    Amet quis id culpa nulla. Ut in cillum exercitation non qui quis ea sint exercitation exercitation. 
                    Enim reprehenderit sunt cillum Lorem reprehenderit aliqua minim culpa.
                </p>
            </div>

            <ul>
                <li><a href="https://github.com/proff001">Github</a></li>
                <li><a href="./Oblig/1">Oblig 1</a></li>
                <li><a href="./Oblig/2">Oblig 2</a></li>
            </ul>
        </div>

        <div id="footer">

        </div>

        <script>
            
        </script>
    </body>
</html>