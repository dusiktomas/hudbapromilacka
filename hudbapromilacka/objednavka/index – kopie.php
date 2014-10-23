<html>
<head>
	<meta charset="UTF8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<?php

include "../autoloader.php";

if(!isset($_POST['jmeno']) && !isset($_SESSION["order_id"]) && !isset($_GET['error'])){
	header("Location: http://www.hudbapromilacka.cz");
}


if(isset($_POST['jmeno']) && isset($_POST['prijmeni']) && !isset($_POST["next_step"])){
	$typ = htmlspecialchars($_POST["typ"]);
    $jmeno = htmlspecialchars($_POST["jmeno"]);
    $prijmeni = htmlspecialchars($_POST["prijmeni"]);
    $email = htmlspecialchars($_POST["email"]);
    $mesto = htmlspecialchars($_POST["mesto"]);
    $ulice = htmlspecialchars($_POST["ulice"]);
	@$dorucovaci_jmeno = htmlspecialchars($_POST["dorucovaci_jmeno"]);
    @$dorucovaci_prijmeni = htmlspecialchars($_POST["dorucovaci_prijmeni"]);
	@$dorucovaci_mesto = htmlspecialchars($_POST["dorucovaci_mesto"]);
    @$dorucovaci_ulice = htmlspecialchars($_POST["dorucovaci_ulice"]);
    @$dorucovaci_psc = htmlspecialchars($_POST["dorucovaci_psc"]);
	@$poznamka = htmlspecialchars($_POST["poznamka"]);
    $psc = htmlspecialchars($_POST["psc"]);
    $datum = date("D:m:Y");
    $skladba = htmlspecialchars($_POST["skladba"]);
    $prani = htmlspecialchars($_POST["prani"]);
	@$jmeno_osoby = htmlspecialchars($_POST["jmeno_osoby"]);
	@$zpusob_platby = htmlspecialchars($_POST["zpusob_platby"]);
	
	foreach($_POST as $key => $val){
		$_SESSION[$key] = $val;
	}
	
	$price = new Prices();
	
		echo '<h3 style="margin-left: 15px">Zkontrolujte si své údaje<br></h3><hr>';
		echo '<div style="margin-left: 15px">';
		echo '<b>Fakturační Adresa:</b><br>';
		echo $jmeno.' '.$prijmeni.'<br>';
		echo $ulice.'<br>';
		echo $psc.' '.$mesto;
		echo '<br><br>';
		echo '</div>';
		
		if(isset($_POST['dorucovaci_jmeno'])){
			echo '<div style="margin-left: 15px">';
			echo '<b>Doručovací Adresa:</b><br>';
			echo $dorucovaci_jmeno.' '.$dorucovaci_prijmeni.'<br>';
			echo $dorucovaci_ulice.'<br>';
			echo $dorucovaci_psc.' '.$dorucovaci_mesto;
			echo '<br><br>';
			echo '</div>';
		}
	
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
	if($typ != 'Skladba'){
		echo '<td>Poštovné</td><td>'.$price->getPrice('postovne').' Kč</td><tr></tr>';
	}
	if($typ == 'Skladba'){
		echo '<td>Platba předem</td>';	
	}else {
		echo '<td>'.$zpusob_platby.'</td>';
	}
	if($zpusob_platby == 'Dobírka'){
		echo '<td>'.$price->getPrice('dobirka').' Kč</td>';
	} else {
		echo '<td>0 Kč</td>';
	}
	echo '<tr></tr><td><b>Cena celkem</b></td>';
	echo '<td><b>'.$price->getTotalPrice().' Kč</b></td><tr></tr>';
	echo '';
	
	echo '</table>';	
}
if(isset($_POST["next_step"])){

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
	@$jmeno_osoby = htmlspecialchars($_POST["jmeno_osoby"]);
	@$zpusob_platby = htmlspecialchars($_POST["zpusob_platby"]);
	@$poznamka = htmlspecialchars($_POST["poznamka"]);
	
	if(isset($_POST['dorucovaci_mesto'])){
		$dorucovaci_mesto = htmlspecialchars($_POST["dorucovaci_mesto"]);
		$dorucovaci_ulice = htmlspecialchars($_POST["dorucovaci_ulice"]);
		$dorucovaci_psc = htmlspecialchars($_POST["dorucovaci_psc"]);
		$dorucovaci_jmeno = htmlspecialchars($_POST["dorucovaci_jmeno"]);
		$dorucovaci_prijmeni = htmlspecialchars($_POST["dorucovaci_prijmeni"]);
	} else {
		$dorucovaci_mesto = '';
		$dorucovaci_ulice = '';
		$dorucovaci_psc = '';
		$dorucovaci_jmeno = '';
		$dorucovaci_prijmeni = '';
	}
	
	$audio = Audio::getAudioIdByName($skladba);
	
	if(Audio::getAudioIdByName($skladba) === Null){
	  return Redirection::orderRedirectToError('audio');
	}
	if( ! Audio::isFreeToBuy($audio)){
	  return Redirection::orderRedirectToError('audio_bought');	
	}
	
	$customerArray = array(
		'jmeno' => $jmeno,
		'prijmeni' => $prijmeni,
		'email' => $email,
		'ulice' => $ulice,
		'psc' => $psc,
		'mesto' => $mesto,
		'dorucovaci_mesto' => $dorucovaci_mesto,
		'dorucovaci_ulice' => $dorucovaci_ulice,
		'dorucovaci_psc'   => $dorucovaci_psc,
		'dorucovaci_jmeno' => $dorucovaci_jmeno,
		'dorucovaci_prijmeni' => $dorucovaci_prijmeni,
	);
	
	$customer = new Customer($customerArray);
	
	if(!$customer->isExists()){
	  return Redirection::orderRedirectToError('customer');
	}
	$price = new Prices();
	
	$orderArray = array(
		'typ' => $typ,
		'prani' => $prani,
		'jmeno_osoby' => $jmeno_osoby,
		'audio' => $audio,
		'cena' => $price->getPrice('skladba'),
		'datum_objednani' => date('d-m-y:H:i'),
		'customer' => $customer->getId(),
		'poznamka' => $poznamka,
	);
	
	$order = new Order($orderArray);
	if(!$order->isExists()){
	  return Redirection::orderRedirectToError('order');
	}
	
	$audio = new Audio($skladba);
	if(!$audio->isSold()){
	  return Redirection::orderRedirectToError('audioNotSold');
	}
	$_SESSION["order_id"] = $order->getId();
	$_SESSION["order_email"] = $email;
	Redirection::orderRedirectToSuccess();	

}

if (isset($_SESSION["order_id"]) && @$_GET["success"] == 'true'){
	echo '<h4> Objednávka úspěšně provedena </h4><hr>';
	echo 'Vaše objednávka s číslem <b>'.$_SESSION["order_id"].'</b> byla úspěšně provedena.<br> 
	Informace o objednávce jsme vám zaslali na email <b>'.$_SESSION["order_email"].'</b>.<br> Děkujeme za váš nákup.';
	echo '<br><h5><a href="http://www.hudbapromilacka.cz">Vrátit se na hlavní stránku</h5>';
	
	@session_destroy();
}
?>

<?php if(@$_GET["error"] == 'audio_bought'): ?>
	<h4>Chyba v objednávce</h4><hr>
	Vaši skladbu bohužel koupil už někdo jiný, vyberte si prosím jinou.<br><br>
	<button type="submit" class="btn btn-default" onclick="location.href = 'index.php';">Zpět</button>
<?php endif; ?>

<?php if(isset($_GET['error']) && @$_GET["error"] != 'audio_bought'): ?>
	<h4>Chyba v objednávce</h4><hr>
	Objednávka se nezdařila, zkontrolujte si prosím vaše údaje.<br><br>
	
	<button type="submit" class="btn btn-default" onclick="location.href = 'index.php';">Zpět</button>

<?php endif; ?>



<?php if(!isset($_GET["success"]) && !isset($_GET['error'])):?>
	
	<table class="table" style="width: 350px">
		<td>Obdarovaná osoba</td>
		<td><?php   echo $jmeno_osoby;?></td><tr></tr>
		<td>Přání</td>
		<td><?php   echo $prani;?><td>
	</table><hr>
	<form method="POST">
	Poznámka<br>
	<textarea name="poznamka" cols="50"> </textarea><br><br>
		<?php 
			foreach ($_POST as $key => $val){
				echo '<input type="hidden" name="'.$key.'" value="'.$val.'">';
			}
				echo '<input type="hidden" name="next_step">';
		?>
	  <button type="submit" class="btn btn-default" style="margin-left: 208px"><b>Objednat</b></button>
	</form>
	<button class="btn btn-default" onclick="location.href = 'http://www.hudbapromilacka.cz';">Zpět</button>
<?php endif; ?>

</body>
</html>