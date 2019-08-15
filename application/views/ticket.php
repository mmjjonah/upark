<?php
require "pages/header.php";
require_once 'include/constant.php';
require_once 'include/pdo2.php';

$pdo = PDO2::getInstance();
$requete = $pdo->prepare("SELECT nom,lieu FROM parking");
$requete->execute();
$data = $requete->fetchAll();
$place;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ticket Etape 1</title>
	<script type="text/javascript">
		function showHint(str) {
   
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "<?= $_SERVER['HTTP_REFERER']?>?lieu=" + str, true);
        xmlhttp.send();
    }
}
	</script>
</head>
<body>
	<form action="" method="post">
		<div class="form-group">
		<label for="emplacement">Votre emplacement</label>
			<select name="emplacement" id="emplacement" class="form-control">
				<?php
		    	for ($i=0; $i<sizeof($data); $i++){
		        	$place = $data[$i]['lieu'];
		            echo "<option onClick='showHint(this.value)'>$place</option>";
		    	}
			    ?>
			</select>
		</div>
		<div class="form-group">
		<label for="nom_parking">Nom du parking</label>
			<select name="nom_parking" id="nom_parking" class="form-control">
				<?php
		    	for ($i=0; $i<sizeof($data); $i++){
		        	$name = $data[$i]['nom'];
		        	if ($_GET['lieu'] == $data[$i]['lieu']) {
		            	echo "<option>$place $name</option>";
		        	}
		    	}
			    ?>
			</select>
		</div>
	</form>
</body>
</html>