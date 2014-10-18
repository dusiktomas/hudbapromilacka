<?php
include 'classes/controller/Order.php';
include 'classes/controller/Audio.php';
include 'classes/controller/Customer.php';



if(isset($_POST["jmeno"]) && isset($_POST["mesto"])){
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
	
	$audio = Audio::getAudioIdByName($skladba);
	
	if(Audio::getAudioIdByName($skladba) === Null){
	  return Redirection::orderRedirectToError('audio');
	}
	
	$customerArray = array(
		'jmeno' => $jmeno,
		'prijmeni' => $prijmeni,
		'email' => $email,
		'ulice' => $ulice,
		'psc' => $psc,
		'mesto' => $mesto,
	);
	
	$customer = new Customer($customerArray);
	
	if(!$customer->isExists()){
	  return Redirection::orderRedirectToError('customer');
	}
	
	$orderArray = array(
		'typ' => $typ,
		'prani' => $prani,
		'jmeno_osoby' => $jmeno_osoby,
		'audio' => $audio,
		'cena' => Prices::getPrice('skladba'),
		'datum_objednani' => date('d-m-y:H:i'),
		'customer' => $customer->getId(),
	);
	
	$order = new Order($orderArray);
	if(!$order->isExists()){
	  return Redirection::orderRedirectToError('order');
	}
	
	$audio = new Audio($skladba);
	if(!$audio->isSold()){
	  return Redirection::orderRedirectToError('audioNotSold');
	}
	
	Redirection::orderRedirectToSuccess();	
}

?>