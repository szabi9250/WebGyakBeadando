	<?php
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
				
		$re1 = '/^[A-Za-z]{8,20}$/';	
		$kimenet.= "Név: {$_POST['nev']}";
		if(!isset($_POST['nev']) || !preg_match($re1,$_POST['nev']))
		{
			$kimenet.= "<span> Hiba: Hiányzó vagy helytelen név.</span>";
		}
		$kimenet.= "<br>";
	
		$re2 = '/^[A-Za-z0-9_\-\.]+\@[A-Za-z0-9_\-\.]+\.[A-Za-z]{2,4}$/';
		$kimenet.= "E-mail: {$_POST['email']}";
		if(!isset($_POST['email']) || !preg_match($re2,$_POST['email']) || strlen($_POST['email']) > 40)
		{
			$kimenet.= "<span> Hiba: Hiányzó, helytelen vagy túl hosszú e-mail.</span>";
		}
		$kimenet.= "<br>";
	
		$kimenet.= "Tárgy: {$_POST['targy']}";
		if(!isset($_POST['targy']))
		{
			$kimenet.= "<span> Hiba: Hiányzó tárgy.</span>";
		}
		$kimenet.= "<br>";
	
		$kimenet.= "Üzenet: {$_POST['szoveg']}";
		if(!isset($_POST['szoveg']) || strlen($_POST['szoveg']) < 20)
		{
			$kimenet.= "<span> Hiba: Hiányzó vagy helytelen az üzenet hossza.</span>";
		}
		$kimenet.= "<br>";
	
		echo '<p>' . $kimenet . '</p>';
	?>
	<p><a href="?oldal=uzenetkuld">További üzenetek küldése</a></p>
