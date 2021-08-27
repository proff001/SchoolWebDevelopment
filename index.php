<!DOCTYPE html>
<html>
    <head>
        <title>Hjemmeside</title>
        <!-- Aparently normal would not work 🤔 -->
        <!-- <link rel="stylesheet" href="./style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./style.css?<?=filemtime("./style.css")?>"/>
        <style>
            * {
                color: rgb(200, 200, 200);
            }

            #personInfo {
                width: 68%;
                border-radius: 5vh 0vh 5vh;
                display: grid;
                grid-template-columns: 1fr 1.5fr;
                background-color: #333;
            }
            
            #pfp {
                padding: 0.2vh;
                border-radius: 5vh 0vh 0vh;
            }

            #about {
                padding: 1vh;
            }
            
        </style>
    </head>
    <body>
        <div id="header">
            <text id="title">Thomas's Websted</text>
            <div class="flexAlignCenter"><a class="flexAlignCenter" href="./Oblig/">Obliger</a></div>
            <div class="flexAlignCenter active"><a class="flexAlignCenter" href="">Hjem</a></div>
        </div>
        <div id="content">
            <div id="personInfo">
                <img src="./img/pfp.png" alt="Bildet av meg!" id="pfp">
                <p id="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, accusamus qui, nihil praesentium, iure temporibus quasi quibusdam quis et nam fuga id facere quae odio. Sed ullam maxime architecto totam!
                    Recusandae enim ullam veritatis ea minima dignissimos eveniet sed deserunt nesciunt, mollitia sint earum ratione unde amet aperiam cumque natus delectus magnam quisquam! Quo voluptatibus et magnam accusamus debitis vel!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae accusamus soluta, repellat error dolores quasi modi veniam nihil architecto esse quia quibusdam, voluptatem deserunt et dicta quod porro unde exercitationem.
                    Ipsam, molestias odio nihil laborum quo saepe magnam soluta nostrum velit. Sit sed voluptas eos vitae sint. Culpa est minima provident fuga architecto, accusantium nostrum maxime sint atque eum a.
                    Harum fugit deserunt, iste numquam mollitia ratione accusantium in rem possimus! Veritatis amet laborum distinctio esse reprehenderit incidunt dignissimos corporis eaque? Explicabo voluptates delectus alias quis vitae, obcaecati repellat eaque!
                    Ipsam quidem officiis possimus at perspiciatis nihil veniam laudantium, rem suscipit quibusdam quos dolor voluptatem atque. Voluptas vitae hic reprehenderit qui, maxime sapiente consectetur repellat magnam fuga recusandae sint dolorum.
                </p>
            </div>
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
</html>