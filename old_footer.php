<div class="footer">
	<p align="center">
		<span class="left">© 2008</span> 
		<?php
		$counter_name = "counter.txt";
		 
		// Check if a text file exists. If not create one and initialize it to zero.
		if (!file_exists($counter_name)) {
		  $f = fopen($counter_name, "w");
		  fwrite($f,"0");
		  fclose($f);
		}
		 
		// Read the current value of our counter file
		$f = fopen($counter_name,"r");
		$counterVal = fread($f, filesize($counter_name));
		fclose($f);
		 
		// Has visitor been counted in this session?
		// If not, increase counter value by one
		if(!isset($_SESSION['hasVisited'])){
		  $_SESSION['hasVisited']="yes";
		  $counterVal++;
		  $f = fopen($counter_name, "w");
		  fwrite($f, $counterVal);
		  fclose($f); 
		}
	 
		if($_SESSION['lang']=="en") echo "Number of visits"; else if ($_SESSION['lang'] =="sr") echo "Broj poseta";
		echo ": $counterVal"; 
		?>
		<span class="right"><?php if($_SESSION['lang']=="en") echo "by"; else if ($_SESSION['lang'] =="sr") echo "od"; ?> Miloš Janković</span>
	</p>
</div>