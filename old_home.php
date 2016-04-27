<div class="content">
	<p align="center" class="style1"><?php if($_SESSION['lang']=="en") echo "Welcome to the first site of Miloš Janković"; else if ($_SESSION['lang'] =="sr") echo "Dobrodošli na prvi sajt Miloša Jankovića"; ?></p>

	<p align="center" class="style1">&#160;</p>

	<p align="center" class="style1"><?php if($_SESSION['lang']=="en") echo "Enjoy"; else if ($_SESSION['lang'] =="sr") echo "Uživajte"; ?></p>
</div>

<div class="content">
	<div align="center">
		<table width="373" align="center">
			<tr>
				<td>
					<div align="center" id="sat"></div>

					<div align="center">
						<p>
							<b>
								<script type="text/javascript">
								//<![CDATA[
								var d=new Date();
								Dan=d.getDay();
								switch (Dan)
								{
								case 1:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Monday"; else if ($_SESSION['lang'] =="sr") echo "Ponedeljak"; ?><\/b>");
								break;
								case 2:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Tuesday"; else if ($_SESSION['lang'] =="sr") echo "Utorak"; ?><\/b>");
								break;
								case 3:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Wednesday"; else if ($_SESSION['lang'] =="sr") echo "Sreda"; ?><\/b>");
								break;
								case 4:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Thursday"; else if ($_SESSION['lang'] =="sr") echo "Četvrtak"; ?><\/b>");
								break;
								case 5:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Friday"; else if ($_SESSION['lang'] =="sr") echo "Petak"; ?><\/b>");
								break;
								case 6:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Saturday"; else if ($_SESSION['lang'] =="sr") echo "Subota"; ?><\/b>");
								break;
								case 0:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Sunday"; else if ($_SESSION['lang'] =="sr") echo "Nedelja"; ?><\/b>");
								break;
								default:
								document.write("<b><?php if($_SESSION['lang']=="en") echo "Who messes with the date"; else if ($_SESSION['lang'] =="Ko zeza datum?") echo "od"; ?><\/b>");
								}
								//]]>
								</script>
							</b>
						</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>