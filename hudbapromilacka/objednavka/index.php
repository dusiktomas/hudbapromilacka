<html>
<head>
	<meta charset="UTF8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<?php

include "../autoloader.php";

if(isset($_POST['jmeno']) && isset($_POST['prijmeni'])){
	$typ = htmlspecialchars($_POST["typ"]);
    $jmeno = htmlspecialchars($_POST["jmeno"]);
    $prijmeni = htmlspecialchars($_POST["prijmeni"]);
    $email = htmlspecialchars($_POST["email"]);
    $mesto = htmlspecialchars($_POST["mesto"]);
    $ulice = htmlspecialchars($_POST["ulice"]);
    $psc = htmlspecialchars($_POST["psc"]);
    $datum = date("D:m:Y");
    $skladba = htmlspecialchars($_POST["skladba"]);
    $prani = htmlspecialchars($_POST["prani"]);
	$jmeno_osoby = htmlspecialchars($_POST["jmeno_osoby"]);
	$zpusob_platby = htmlspecialchars($_POST["zpusob_platby"]);
	
	
	$price = new Prices();
	
		echo '<h3 style="margin-left: 15px">Zkontrolujte si své údaje<br></h3><hr>';
		echo '<div style="margin-left: 15px">';
		echo '<b>Fakturační Adresa:</b><br>';
		echo $jmeno.' '.$prijmeni.'<br>';
		echo $ulice.'<br>';
		echo $psc.' '.$mesto;
		echo '<br><br>';
	echo '</div>';
	
	echo '<table class="table" style="width: 350px">';
	echo '<td><h4>Zboží</h4></td><td><h4>Cena</h4></td><tr></tr>';
	echo '<td>'.$typ;
	if($typ == 'Skladba'){
		echo '<td>'.$price->getPrice('typ_skladba').' Kč </td>';
	} else {
		echo '<td> '.$price->getPrice('typ_balicek').' Kč </td>';
	}
	echo '<tr></tr><td>Skladba '.$skladba.'</td>';
	echo '<td>'.$price->getPrice('skladba').' Kč</td><tr></tr>';
	echo '<td>'.$zpusob_platby.'</td>';
	if($zpusob_platby == 'Dobírka'){
		echo '<td>'.$price->getPrice('dobirka').' Kč</td>';
	} else {
		echo '<td>0 Kč</td>';
	}
	if($typ != 'Skladba'){
		echo '<tr></tr><td>Poštovné</td><td>'.$price->getPrice('postovne').' Kč</td>';
	}
	echo '<tr></tr><td>Cena celkem</td>';
	echo '<td>'.$price->getTotalPrice().' Kč</td><tr></tr>';
	echo '</table><hr>';
	
	
}
?>


 <button type="submit" class="btn btn-default">Zpět</button>
  <button type="submit" class="btn btn-default" style="margin-left: 200px;"><b>Objednat</b></button>


</body>
</html>