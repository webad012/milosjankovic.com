<div class="content">
<ul>
	<li>
		<a href="?page=projects&project=cshistory">CS History</a>
		
		<?php
			if(isset($_GET[project]) && $_GET[project]=="cshistory")
			{
				echo '</br></br>';
				
				if($_SESSION['lang']=="en")
				{
					echo 'CS History is free game whose objective is to teach about history of computer science, how it all came to be, but in a little different manner.
					</br>
					Game is developed in <a href="http://unity3d.com/">Unity3D</a>.
					</br>
					For any questions, comments and/or suggestions feel free to contact me.
					</br></br>
					Download: <a href="https://www.dropbox.com/s/qegceg0dekm29ej/CS_History_0_1.apk" target="_blank">CS_History Android v0.1 (23MB)</a>';
				}
				else if($_SESSION['lang']=="sr")
				{
					echo 'CS History je besplatna igrica čiji je cilj da nauči o istoriji kompjuterskih nauka, kako je sve nastalo, ali na malo drugačiji način.
					</br>
					Igra razvijena koristeći <a href="http://unity3d.com/">Unity3D</a>.
					</br>
					Za bilo kakva pitanja, komentare i/ili sugestije slobodno me kontakirajte.
					</br></br>
					Preuzimanje: <a href="https://www.dropbox.com/s/qegceg0dekm29ej/CS_History_0_1.apk" target="_blank">CS History Android v0.1 (23MB)</a>';
				}
				
				echo '</br></br>';
			}
		?>
	</li>
	<li>
		<a href="?page=projects&project=spejssuter">Spejs šuter</a>
		
		<?php
			if(isset($_GET[project]) && $_GET[project]=="spejssuter")
			{
				echo '</br></br>';
				
				if($_SESSION['lang']=="en")
				{
					echo 'Download: <a href="http://alas.matf.bg.ac.rs/~mi08204/projekti/SpejsSuter/SpejsSuterWin_1_0.zip" target="_blank">SpejsSuter Win v0.1 (11.6MB)</a>';
				}
				else if($_SESSION['lang']=="sr")
				{
					echo 'Preuzimanje: <a href="http://alas.matf.bg.ac.rs/~mi08204/projekti/SpejsSuter/SpejsSuterWin_1_0.zip" target="_blank">SpejsSuter Win v0.1 (11.6MB)</a>';
				}
				
				echo '</br></br>';
			}
		?>
	</li>
	<!-- <li>
		<a href="?page=projects&project=projectportfolio">ProjectPortfolio</a>
		
		<?php
			/* if(isset($_GET[project]) && $_GET[project]=="projectportfolio")
			{
				echo '</br></br>';
				
				if($_SESSION['lang']=="en")
				{
					echo 'Download: <a href="https://www.dropbox.com/s/1cxls9275zyhlvw/ProjectPortfolioSetup.zip" target="_blank">ProjectPortfolio Win(8.5MB)</a>';
				}
				else if($_SESSION['lang']=="sr")
				{
					echo 'Preuzimanje: <a href="https://www.dropbox.com/s/1cxls9275zyhlvw/ProjectPortfolioSetup.zip" target="_blank">ProjectPortfolio Win(8.5MB)</a>';
				}
				
				echo '</br></br>';
			} */
		?>
	</li> -->
	<li>
		<a href="?page=projects&project=stickmantap">StickmanTap</a>
		
		<?php
			if(isset($_GET[project]) && $_GET[project]=="stickmantap")
			{
				echo '</br></br>';
				
				if($_SESSION['lang']=="en")
				{
					echo 'Download: ';
				}
				else if($_SESSION['lang']=="sr")
				{
					echo 'Preuzimanje: ';
				}
				
				echo '<a href="https://www.dropbox.com/s/6d0japrqwdd6e2n/StickmanTap.apk" target="_blank">StickmanTap v0.1.5 Android(1.4MB)</a>';
				
				echo '</br></br>';
			}
		?>
	</li>
	<!-- <li>
		<a href="?page=projects&project=herozero">Hero Zero Duel Simulator</a>
		
		<?php
			/* if(isset($_GET[project]) && $_GET[project]=="herozero")
			{
				echo '</br></br>';

				echo '<a href="http://milosjankovic.com/projekti/herozero_duel_simulator/" target="_blank">Link</a>';
				
				echo '</br></br>';
			} */
		?>
	</li> -->
	 <li>
		<a href="?page=projects&project=autoskola">Autoskola</a>
		
		<?php
			if(isset($_GET[project]) && $_GET[project]=="autoskola")
			{
				echo '</br></br>';

				echo '<a href="https://www.dropbox.com/s/4q4xkpnx2ffj4sb/Autoskola.apk" target="_blank">Link</a>';
				
				echo '</br></br>';
			}
		?>
	</li> 
</ul>
</div>
