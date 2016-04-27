<?php
	session_start();
	
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang'] = "sr";
	}
	
	if(isset($_POST['lang']))
	{
		$_SESSION['lang'] = $_POST['lang'];
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Miloš Janković" />
  <meta name="keywords" content="miloš janković milos jankovic milosjankovic" />
  <meta name="author" content="Milos Jankovic" />
  <script type="text/javascript" src="sat.js">
</script>
  <link rel="stylesheet" type="text/css" href="default.css" media="screen" />
</script>
  <script type="text/javascript" src="sat.js">
</script>

  <title>Miloš Janković</title>
</head>

<body onload="startTime()">
  <?php include_once("analyticstracking.php") ?>
  <div class="outer-container">
    <div class="inner-container">
		<div style="float:right">
			<div style="float:right">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?'.http_build_query($_GET); ?>">
					<input type="hidden" name="lang" value="en">
					<button type="submit" <?php if ($_SESSION['lang'] =="en") echo " disabled "; else if ($_SESSION['lang'] =="sr") echo 'style="opacity: 0.5;"'; ?> >
						<img src="img/english_flag_icon.png" style="height:20px"/>
					</button>
				</form>
			</div>
			<div style="float:right">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?'.http_build_query($_GET); ?>">
					<input type="hidden" name="lang" value="sr">
					<button type="submit" <?php if ($_SESSION['lang'] =="sr") echo " disabled "; else if ($_SESSION['lang'] =="en") echo 'style="opacity: 0.5;"'; ?> >
						<img src="img/serbian_flag_icon.png" style="height:20px"/>
					</button>
				</form>
			</div>
		</div>
		<div class="header">
			<div class="title">
				<div align="center">
					<span class="sitename"><a href="?page=home">Miloš Janković</a></span>
				</div>
			</div>
		</div>

		<div class="path">
			<div align="left">
				<?php
				if($_SESSION['lang']=="en")
				{
					echo "Home";
				}
				else if($_SESSION['lang']=="sr")
				{
					echo "Početak";
				}


				if(isset($_GET["page"]) && $_GET["page"] != "home")
				{
					echo " > ";

					if($_GET["page"]=="about")
					{
						if($_SESSION['lang']=="en")
						{
							echo "About me";
						}
						else if($_SESSION['lang']=="sr")
						{
							echo "O meni";
						}
					}
					else if($_GET["page"]=="contact")
					{
						if($_SESSION['lang']=="en")
						{
							echo "Contact";
						}
						else if($_SESSION['lang']=="sr")
						{
							echo "Kontakt";
						}
					}
					else if($_GET["page"]=="projects")
					{
						if($_SESSION['lang']=="en")
						{
							echo "Projects";
						}
						else if($_SESSION['lang']=="sr")
						{
							echo "Projekti";
						}
					}
					else
					{
						echo('error');
					}
				}
				?>
			</div>
		</div>

      <div class="main">
		<?php include 'navigationmenu.php';?>
		
		<?php
			if(!isset($_GET["page"]) || (isset($_GET["page"]) && $_GET["page"]=="home"))
			{
				include 'home.php';
			}
			else if($_GET["page"]=="about")
			{
				include 'about.php';
			}
			else if($_GET["page"]=="contact")
			{
				include 'contact.php';
			}
			else if($_GET["page"]=="projects")
			{
				include 'projects.php';
			}
			else
			{
				echo('error');
			}
		;?>

        <div class="clearer"></div>
      </div>

		<?php include 'footer.php';?>
    </div>
  </div>
</body>
</html>
