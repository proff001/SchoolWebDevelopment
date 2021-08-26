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
            #personInfo {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <text id="title">Thomas's Websted</text>
            <a href="./Oblig/">Obliger</a>
            <a class="active" href="">Hjem</a>
        </div>
        <div id="content">
            <div id="personInfo">
                <img src="" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum non assumenda! Veniam cumque, laudantium vero distinctio reiciendis quisquam explicabo nihil nesciunt, corporis, quod exercitationem? Tenetur voluptatum laborum assumenda nam!
                    Autem est molestiae quam tempore, ullam amet harum accusamus animi qui corrupti. Rerum, harum hic! Ducimus ratione debitis est iusto sint. Fugit eaque natus corporis odio similique sapiente ipsa minima!
                    Quis sunt debitis magnam cumque delectus. Maxime aperiam in eaque nemo saepe, officia dolorem molestiae minus! Similique, ut ipsa quaerat voluptatem nobis optio nihil id odit delectus in quam incidunt.
                    Mollitia pariatur incidunt totam suscipit, tempore explicabo amet eos magni omnis repellat. Doloremque temporibus vero nostrum inventore magnam, voluptatum architecto aliquam vitae similique totam culpa unde ex facere cum commodi!
                    Minus, voluptatibus delectus molestiae quas nam excepturi vero accusamus officia, reprehenderit, consectetur libero voluptatum. Perspiciatis labore asperiores dicta aperiam atque consectetur quibusdam iusto earum minus officiis sequi dolorum, sit qui?
                    Vero, laudantium itaque recusandae inventore hic consequatur dolorem obcaecati optio? Ipsam dicta temporibus deserunt sunt expedita accusantium libero repellat eveniet labore error, soluta incidunt similique magnam dolore minima, voluptatum quo.
                    Nobis culpa est tempora mollitia qui voluptatem atque animi repellat odio! Obcaecati, inventore. Consectetur a sapiente accusamus numquam impedit vitae voluptates quam hic eaque voluptas, quos eos iusto! Repellat, voluptatem?
                    Rem, hic ipsum quod quas iste consectetur error, dignissimos quaerat accusamus aspernatur perferendis dolore libero amet quisquam consequatur alias rerum ipsa ducimus. Ullam nobis cupiditate maxime? Aspernatur magnam voluptate error.
                    Nihil facere sed soluta expedita tempore autem earum? In numquam quia quo aperiam blanditiis placeat ipsum architecto suscipit exercitationem? Ipsam similique vel deleniti deserunt ab a, quas ad vitae eum?
                    Ad, ipsam doloribus suscipit pariatur quibusdam est a ipsum tenetur, eaque commodi harum necessitatibus praesentium, error corrupti optio nemo? Voluptatibus quos, mollitia illo placeat quas debitis commodi corporis modi quidem!
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