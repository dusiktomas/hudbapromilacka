<?php 
@session_start();
header('Content-Type: text/html; charset=utf-8');
include "autoloader.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>HudbaProMiláčka - Daruj svému nejblížší originální dárek</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" href="player/demos/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
        <script src="scripts/jquery-1.11.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="player/jquery.jplayer.min.js"></script>
        <script src="player/add-on/jplayer.playlist.min.js"></script>
        <script src="scripts/all-scripts.js"></script>	
        <link rel="icon" type="image/ico" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans+Condensed:300|Roboto&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&appId=195768110484981&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
        <header>
            <span class="header-links">
				<a class="header-link information-layer-information-click" id="skladby-link" href="#">CENÍK</a> |
				<a class="header-link information-layer-choice-click" id="skladby-link" href="#">VÝBĚR SKLADEB</a> |
                <a class="header-link" id="informace-link" href="#">INFORMACE</a> |
                <a class="header-link" href="mailto: info@hudbapromilacka.cz">KONTAKT</a>
            </span>
            <div class="header-img">
                <a href="#"><img class="header-logo" src="images/logo.png"></a>
                <span class="header-text">Klikněte a vyberte si skladbu.</span>
            </div>
        </header>
		
		<div class="informace-layer">
			<div class="informace-layer-content">
				<div class="informace-layer-zpet"><a href="#">Zpět</a></div>
				<h2 class="informace-nadpis">Informace o skladbách</h2>
				<p>Veškerý hudební materiál je komponován zkušenými autory, kteří se aktivně podílí na hudební tvorbě pro české
				i zahraniční interprety a televizní reklamy.
				Každá skladba je jedinečná, to znamená, že si můžete být jistí, že ji neuslyšíte nikde jinde a vlastníte tak originální kus.</p>
				<h2 class="informace-nadpis informace-cenik">Ceník</h2>
				<p>Cena za dárkový balíček, který obsahuje Vaše CD stojí <b>499 Kč</b>.
				Cena za zaslanou skladbu na email v příloze stojí <b>399 Kč</b>.</p>
				
			</div>
        </div>
        <div class="information-layer">
			<div class="fb-like" data-href="https://www.facebook.com/Hudbapromilacka" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            <div class="information-layer-img-pc">
				<center><h1>Dopřejte vašemu blízkému dárek</h1> v podobě originální skladby od našich autorů</center><br><br><br>
				<a href="#" class="header-link information-layer-choice-click" style="color: whitesmoke; margin-left: 25px;">Vyber skladbu</a>
				<a href="#" class="header-link information-layer-information-click" style="color: whitesmoke; margin-left: 565px;">Více informací</a>
			</div>
            <div class="information-layer-img-arrow"><a href="#" alt="Neco"><img class="arrow" alt="Vyberte si skladbu" title="Vyberte si skladbu" data-scroll="player-layer" src="images/arrow.png"></a></div>    
        </div>
		
        <!--ZAČÁTEK PLAYERU !-->
        <div id="player-layer" class="player-layer">
			<div class="player-information-price">
				Cena jedné skladby je <b>399 Kč</b>.
			</div>
			
            <div class="player-information">
				Každá skladba je <b>jedinečná</b>,<br> to znamená, že
				vlastníte originální kus. <br>
				Po zadání objednávky
				bude <br>skladba vymazána z playlistu a <br> nebude si jí moci <br>
				zakoupit <b>nikdo</b> jiný.
			</div>
			
			<div class="player-layer-img-vyber-skladby"><img src="images/vyber-skladby.jpg"></div>
            <div class="player-layer-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                 <div id="jp_container_1" class="jp-audio">
                   <div class="jp-type-single">
                     <div class="jp-gui jp-interface">
                       <ul class="jp-controls">
                         <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                         <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                         <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                         <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                         <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                         <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                       </ul>
                       <div class="jp-progress">
                         <div class="jp-seek-bar">
                           <div class="jp-play-bar"></div>
                         </div>
                       </div>
                       <div class="jp-volume-bar">
                         <div class="jp-volume-bar-value"></div>
                       </div>
                       <div class="jp-time-holder">
                         <div class="jp-current-time"></div>
                         <div class="jp-duration"></div>
                         <ul class="jp-toggles">
                           <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                           <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                         </ul>
                       </div>
                     </div>
                     <div class="jp-details">
                       <ul>
                         <li><span class="jp-title"></span></li>
                       </ul>
                     </div>
                     <div class="jp-no-solution">
                       <span>Update Required</span>
                       To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                     </div>
                   </div>
                 </div>
                <div class="player-playlist"><?php include "codes/audio.php"; ?></div>
				<div class="player-information-click">
				Kliknutím na název skladbu přehrajete.
				</div>
            </div>
        </div>
        <!--KONEC PLAYERU !-->
        <div id="choice-layer" class="choice-layer">
            <div class="choice-layer-img-zpusoby"><img src="images/zpusoby.jpg"></div>
            <div class="choice-layer-texts">
                <div class="choice-layer-text-skladba"><img id="text-skladba" src="images/text-skladba.jpg"></div>
                <div class="choice-layer-text-balicek"><img id="text-balicek" src="images/text-balicek.jpg"></div>
            </div>
            <div class="choice-layer-icons">
                <div class="icon choice-layer-img-skladba" data-type="Skladba"><a href="#"><img src="images/icon-skladba.jpg"></a></div>
                <div class="choice-layer-skladba-content">Vybraná skladba Vám bude zaslána na uvedený email v příloze. Tato možnost je rychlá a levná.<br /> Celková cena za jednu skladbu je <b>399</b> Kč.</div>
                <div class="icon choice-layer-img-balicek" data-type="Dárkový Balíček"><a href="#"><img src="images/icon-balicek.jpg"></a></div>
                <div class="choice-layer-balicek-content">Tento balíček obsahuje CD s potiskem v obalu. Na zadní straně obalu je Vaše přání pro danou osobu. Na obalu a na CD je napsané jméno, pro kterou osobu je CD určeno. <br /> Celková cena za jeden dárkový balíček je <b>499</b> Kč + poštovné .</div>
            </div>
        </div>
        <div id="form-layer" class="form-layer">
            <div class="form-layer-img-objednavka"><img src="images/objednavka.jpg"></div>
			<form method="POST" action="objednavka/index.php" class="form-horizontal">
            <div class="form-layer-form">
                    <div class="form-layer-form-1" class="form-group">
							<span>Typ objednávky </span><small style="margin-left: 113px; "><a href="#" class="choice-repick">Změnit typ</a></small><br />
							<input type="text" class="form-control" value="<?php echo @$_SESSION['typ']; ?>" name="typ" id="form-select-content" readOnly="true"><br />
							<span>Kontaktní údaje</span> <br/>
							<input type="text" class="form-control" value="<?php echo @$_SESSION['jmeno']; ?>" name="jmeno" placeholder="Jméno" maxlength="16" required> <br />
							<input type="text" class="form-control" value="<?php echo @$_SESSION['prijmeni']; ?>" name="prijmeni" placeholder="Přijmení" maxlength="16" required> <br />
							<input type="email" class="form-control" value="<?php echo @$_SESSION['email']; ?>" name="email" placeholder="Email" maxlength="40" required> <br />
							<span>Fakturační adresa</span><br />
							<input type="text" class="form-control" name="ulice" value="<?php echo @$_SESSION['ulice']; ?>" placeholder="Ulice a číslo popisné" maxlength="40" required> <br />
							<input type="text" class="form-control" name="mesto" value="<?php echo @$_SESSION['mesto']; ?>" placeholder="Město" maxlength="30" required> <br />
							<input type="number" class="form-control" name="psc" value="<?php echo @$_SESSION['psc']; ?>" placeholder="PSČ" maxlength="5" required> <br />
							<input type="checkbox" class="deployment-checkbox" name="adress-check-box" checked> Doručovací adresa je shodná s fakturační<br/><br/>
							<div class="deployment-adress">
							</div>
                    </div>
                    <div class="form-layer-form-2" class="form-group">
                        <span>Název skladby </span><small style="margin-left: 100px;"><a href="#" class="information-layer-choice-click">Změnit skladbu</a></small><br />
                        <input type="text" class="form-control" value="<?php echo @$_SESSION['skladba']; ?>" name="skladba" id="form-audio-name" placeholder="Název skladby" readOnly="true"> <br />
						<span>Jméno obdarované osoby</span>
							<input type="text" class="form-control jmeno_osoby" value="<?php echo @$_SESSION['jmeno_osoby']; ?>" name="jmeno_osoby" placeholder="Jmeno osoby" maxlength="30" required> <br />
                        <div class="form-layer-form-2-wish">
                            <span>Přání </span><br />
                            <textarea name="prani" class="form-control form-wish" maxlength="255" placeholder="Do tohoto pole napište přání, které bude na obalu."><?php echo @$_SESSION['prani']; ?></textarea><br />
                        </div>
						Způsob platby
						<select name="zpusob_platby" class="form-control doprava-select">
							<option value="Dobírka">Dobírka (40 Kč)</option>
							<option value="Platba předem">Platba předem (0 Kč)</option>
						</select><br>
						<span>Zásilky jsou posílány českou poštou.<br /><br />
						<input type="checkbox" name="agreement-check-box" required> Souhlasím s pravidly<br/><br />
						<div class="form-layer-order-counter"></div>
                        <button type="submit" class="btn btn-default">Další krok</button>
                    </div>
                </form>
				</div>
            </div>
       			<?php include "codes/reporter.php";?>
        <footer>
            <div class="footer-content">
                <div class="footer-content-table">
					<table>
						<td colspan="5">©2014 HudbaProMilacka.cz</td>
					</table>
                </div>
                <div class="footer-content-links">
                    <table>
                        <td><a href="https://www.facebook.com/Hudbapromilacka" target="_blank"><img class="footer-link border-link" src="images/footer-fb.png"></a></td>
                    </table>
                </div>
            </div>
        </footer>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-35201501-2', 'auto');
		  ga('send', 'pageview');
		</script>
    </body>
</html>
