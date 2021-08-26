<!DOCTYPE html>
<html>
    <head>
        <title>Obliger</title>
        <!-- Aparently normal would not work 🤔 -->
        <!-- <link rel="stylesheet" href="./style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../style.css?<?=filemtime("../style.css")?>"/>
    </head>
    <body>
        <div id="header">
            <text id="title">Thomas's Websted</text>
            <a class="active" href="">Obliger</a>
            <a href="../">Hjem</a>
        </div>
        
        <div id="content">

        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>

        <script>
            let header = document.getElementById('header');
            let sticky = header.offsetTop;

            function navBarSticky() {
                if (window.pageYOffset >= sticky) {
                    header.classList.add("sticky")
                } else {
                    header.classList.remove("sticky");
                }
            };

            window.onscroll = () => navBarSticky();
        </script>
    </body>

    <body>
</html>