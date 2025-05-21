<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<?php
$oldal = $_GET['oldal'] ?? '/';

$cim = $ablakcim[$oldal] ?? $oldalak[$oldal]['szoveg'] ?? 'Alapértelmezett cím';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($cim); ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="styles/lightbox.css" rel="stylesheet" />
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
		<link rel="icon" href="images/favicon.jpg" type="image/ico" sizes="192x192">
</head>
<body>
	<div id="container">
	<header>
		<h2><?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?></h2>
	</header>
			<div id="belso" class="custom-width">
            <nav id="sidenav">
			<ul>					
						
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
						<li<?= (($oldal == $keres) ? ' class="jelenlegi"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
							
						<?php } ?>
					<?php } ?>

 <li class="dropdown-toggle szurke" type="button" data-bs-toggle="dropdown">
    Írások
  </li>
  <ul class="dropdown-menu">
    <li><a href="?oldal=boker">Böker</a></li>
	<li><a href="?oldal=bestech">Bestech</a></li>
    <li><a href="?oldal=ganzomulti">Ganzo Multi</a></li>
    <li><a href="?oldal=novella">Novella</a></li>
    <li><a href="?oldal=egyeb">Egyéb</a></li>
  </ul>
  <li class="darkgomb" type="button" onclick="toggleDarkMode()">Dark Mode</button></li>
  </ul>
        </nav>
        <div id="content">
		<div>
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
		</div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
	</div>
	</div>

		<script src="js/lightbox-plus-jquery.js"></script>
		<script src="js/darkmode.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
