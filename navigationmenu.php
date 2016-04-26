<div class="navigation">
	<h2 class="style1"><?php if($_SESSION['lang']=="en") echo "Navigation menu"; else if($_SESSION['lang']=="sr") echo "Navigacioni Meni"; ?></h2>
	<ul>
		<li>
			<a href="?page=home"><?php if($_SESSION['lang']=="en") echo "Home page"; else if($_SESSION['lang']=="sr") echo "Početna Strana"; ?></a>
		</li>
		<li>
			<a href="?page=about"><?php if($_SESSION['lang']=="en") echo "About me"; else if($_SESSION['lang']=="sr") echo "O meni"; ?></a>
		</li>
		<li>
			<a href="?page=contact"><?php if($_SESSION['lang']=="en") echo "Contact"; else if($_SESSION['lang']=="sr") echo "Kontakt"; ?></a>
		</li>
		<li>
			<a href="?page=projects"><?php if($_SESSION['lang']=="en") echo "Projects"; else if($_SESSION['lang']=="sr") echo "Projekti"; ?></a>
		</li>
	</ul>
</div>