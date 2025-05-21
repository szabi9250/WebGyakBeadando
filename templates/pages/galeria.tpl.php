<?php
    // Alkalmazás logika:
    include('includes/galeria.inc.php');
    
    // adatok összegyűjtése:    
    $kepek = array();   //itt tároljuk a megjelenítendő képeket, indexek a képfájlok nevei, értékek az utolsó módosítás időpontja (timestamp)
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        // echo $fajl."<br>";
        if (is_file($MAPPA.$fajl)) {
            // echo $fajl."<br>";
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
    
    /*
    echo "<pre>";
    print_r($kepek);
    echo "</pre>";
    */
    
    // Megjelenítés logika:
?>
    <div id="galeria">
    <h1>Galéria</h1>
    <?php
    arsort($kepek);
    /*
    echo "<pre>";
    print_r($kepek);
    echo "</pre>";
    */
    
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?= $MAPPA.$fajl ?>">
                <img src="<?= $MAPPA.$fajl ?>">
            </a>            
            <p>Név:  <?= $fajl; ?></p>
            <p>Dátum:  <?= date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
	
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo '


<form action="?oldal=feltolt" method="post">
<input class="form-control" type="submit" value="Képek feltöltése" />
</form>
'
;
} else {
    echo '<p>Kép feltöltéséhez bejelentkezés szükséges.</p>';
}
?>
</div>