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
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="./Oblig/">Obliger</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="">Hjem</a></div>
        </div>
        <div id="content">
            <div id="personInfo">
                <img src="./img/pfp.png" alt="Bildet av meg!" id="pfp">
                <p id="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum molestias sint tempore sed facere non rem ut necessitatibus modi, illum, quis cumque. Molestiae non eius veniam voluptatibus eaque consequatur corrupti!
                    Eaque voluptatem quisquam ducimus nisi, voluptas voluptatum. Enim repudiandae facere doloribus expedita illo! Totam, ratione fuga praesentium sapiente perspiciatis earum commodi dolorum cupiditate debitis quae quis ipsam consequuntur, reiciendis aliquam?
                    Ut, error omnis nam veniam sint nesciunt odio molestias doloribus placeat ipsam sed quia a qui dolores unde exercitationem natus sequi, hic quasi consequuntur consectetur blanditiis! Nesciunt eveniet architecto doloribus.
                    Eos, odit libero. Itaque iure beatae atque enim quae quibusdam aliquam illo, excepturi, minima eveniet harum laboriosam! Nihil suscipit molestiae odio molestias corrupti excepturi officiis tempore amet laboriosam, dicta veniam!
                    Perspiciatis voluptas officiis expedita quaerat dolore distinctio! Inventore fugiat vel placeat, hic totam corrupti a minus dolore nulla ea quae exercitationem earum illum, veritatis suscipit id voluptates nihil, sapiente voluptatum.
                    Commodi, veritatis? Voluptate distinctio dolorem labore fugit culpa tenetur, ex veritatis modi aperiam atque omnis expedita quos illo accusantium eos, delectus officia dolorum vel dicta consequuntur quidem corrupti. Alias, non!
                    Quibusdam ipsam saepe in voluptatum ratione explicabo rerum impedit, quam veritatis dolorem odit ullam praesentium voluptatem quaerat natus nihil commodi minus! Adipisci facere ullam quidem iste laborum ducimus praesentium corrupti!
                    Vitae aut nesciunt, neque nobis et quis delectus esse sunt iure quam explicabo illum accusamus modi error voluptatibus ad id voluptatum obcaecati ipsam veritatis quas nostrum iusto sapiente eaque. Quibusdam.
                    Provident esse dolores voluptatem enim! Ipsa fuga error nesciunt rem fugit pariatur dolorem nihil magni dolorum repellat eaque officia consequuntur, architecto quibusdam. Sit libero, a ut nobis dignissimos nihil officiis.
                    Dolores quasi voluptatum, ad quas numquam hic ratione excepturi enim maxime facilis eius? Maxime a magni earum aut voluptate nulla, saepe aperiam deleniti ullam necessitatibus ex? Repellat illo soluta neque.
                </p>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>