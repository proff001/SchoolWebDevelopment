<!DOCTYPE html>
<html>
	<head>
		<title>Hjemmeside</title>
		<link rel="stylesheet" href="./style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<style>
			#container {
				width: 68vw;
				display: grid;
				grid-template-columns: 1fr 1.54fr;
			}
			
			#pfp {
				max-width: 100%;
				max-height: 100%;
				object-fit: contain;
				padding: 0.2vh;
				border-radius: 5vh 0vh 0vh;
			}

			#about {
				width: 100%;
				padding: 1vh;
			}
		</style>
	</head>
	<body>
		<div id="header">
			<div id="title" class="flexAlignCenter">Thomas's Websted</div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="./Oblig/">Obliger</a></div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="./Busy/">BuSy</a></div>
			<div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="">Hjem</a></div>
		</div>
		
		<div id="content">
			<div id="container">
				<img src="./img/pfp.png" alt="Bildet av meg!" id="pfp">
				<p id="about">
					Placeholder tekst (Lorem Ipsum).
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum molestias sint tempore sed facere non rem ut necessitatibus modi, illum, quis cumque. Molestiae non eius veniam voluptatibus eaque consequatur corrupti!
					Eaque voluptatem quisquam ducimus nisi, voluptas voluptatum. Enim repudiandae facere doloribus expedita illo! Totam, ratione fuga praesentium sapiente perspiciatis earum commodi dolorum cupiditate debitis quae quis ipsam consequuntur, reiciendis aliquam?
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