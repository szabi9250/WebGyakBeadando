<?php
    // Alkalmazás logika:
    include('includes/galeria.inc.php');
    
    /*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    */
    
    $uzenet = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        
        
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        
        
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);  // Nem töltött fel fájlt
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
    // Megjelenítés logika:
?>
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>

<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '
	<p>Maximum fájlméret, felbontás, lehetséges fájl formátumok: 1MB, 1920x1080, .jpg, .png</p>
    <form action="?oldal=feltolt" method="post" enctype="multipart/form-data">
        <input type="hidden" name="max_file_size" value="1000000">                                    
        <label>Első: <input type="file" name="elso" accept="image/png, image/jpeg" required></label>  
        <label>Második: <input type="file" name="masodik" accept="image/png, image/jpeg"></label>     
        <label>Harmadik: <input type="file" name="harmadik" accept="image/png, image/jpeg"></label>   
		<input type="submit" name="kuld">                                                             
      </form>    
';
} else {
    echo '<p>Kép feltöltéséhez bejelentkezés szükséges.</p>';
}
?>

