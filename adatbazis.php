<?php
  try {
  
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname=adatbazis', 'root', '',
                  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
	for($i=1; $i<=25; $i++)
	{
		$dbh->exec("insert into felhasznalok values (${i}, 'Családi${i}', 'Utónév${i}', 'Login${i}','".
					password_hash("login".$i, PASSWORD_DEFAULT)."')");
		
	}
	echo "Ok";
  }
  catch (PDOException $e) {
  }
?>

