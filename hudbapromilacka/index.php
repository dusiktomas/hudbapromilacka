<?php 

include "autoloader.php";

include  "codes/form.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HudbaProMiláčka - Daruj svému nejblížší originální dárek</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" href="player/demos/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
        <script src="scripts/jquery-1.11.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="player/jquery.jplayer.min.js"></script>
        <script src="player/add-on/jplayer.playlist.min.js"></script>
        <script src="scripts/all-scripts.js"></script>
        <link rel="icon" type="image/ico" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
                <a class="header-link" id="informace-link" href="#">INFORMACE</a> |
                <a class="header-link" href="">KONTAKT</a> |
                <a class="header-link" href="">JEDEN</a>
            </span>
            <div class="header-img">
                <a href="#"><img class="header-logo" src="images/logo.png"></a>
                <span class="header-text">Klikněte a vyberte si skladbu.</span>
            </div>
        </header>
		<div class="informace-layer">
			<div class="informace-layer-content">
				<h2 class="informace-nadpis">Informace o skladbách</h2>
				<p>Veškerý hudební materiál je komponován zkušenými autory, kteří se aktivně podílí na hudební tvorbě pro české
				i zahraniční interprety a televizní reklamy.
				Každá skladba je jedinečná, to znamená, že si můžete být jistí, že ji neuslyšíte nikde jinde a vlastníte tak originální kus.</p>
				<h2 class="informace-nadpis">Informace o skladbách</h2>
				<p>Veškerý hudební materiál je komponován zkušenými autory, kteří se aktivně podílí na hudební tvorbě pro české
				i zahraniční interprety a televizní reklamy.
				Každá skladba je jedinečná, to znamená, že si můžete být jistí, že ji neuslyšíte nikde jinde a vlastníte tak originální kus.</p>
			</div>
        </div>
        <div class="information-layer">
            <div class="information-layer-img-pc"><img src="images/img-pc.png"></div>
            <div class="information-layer-img-arrow"><a href="#" alt="Neco"><img class="arrow" alt="Vyberte si skladbu" title="Vyberte si skladbu" data-scroll="player-layer" src="images/arrow.png"></a></div>    
        </div>
		
        <!--ZAČÁTEK PLAYERU !-->
        <div id="player-layer" class="player-layer">
            <div class="fb-like-box" data-href="https://www.facebook.com/Hudbapromilacka" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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
                <div class="player-layer-img-arrow"><img class="arrow" alt="Po vybrání skladby si vyberte typ objednávky" title="Po vybrání skladby si vyberte typ objednávky" data-scroll="choice-layer" src="images/arrow.png"></div>    
            </div>
        </div>
        <div class="player-layer-border"></div>
        <!--KONEC PLAYERU !-->
        <div id="choice-layer" class="choice-layer">
            <div class="choice-layer-img-zpusoby"><img src="images/zpusoby.jpg"></div>
            <div class="choice-layer-texts">
                <div class="choice-layer-text-skladba"><img id="text-skladba" src="images/text-skladba.jpg"></div>
                <div class="choice-layer-text-balicek"><img id="text-balicek" src="images/text-balicek.jpg"></div>
            </div>
            <div class="choice-layer-icons">
                <div class="icon choice-layer-img-skladba" data-type="Skladba"><a href="#"><img src="images/icon-skladba.jpg"></a></div>
                <div class="choice-layer-skladba-content">Vybraná skladba Vám bude zaslána na uvedený email v příloze. Tato možnost je rychlá a levná.<br /> Celková cena za jednu skladbu je <b>499</b> (s DPH).</div>
                <div class="icon choice-layer-img-balicek" data-type="Dárkový Balíček"><a href="#"><img src="images/icon-balicek.jpg"></a></div>
                <div class="choice-layer-balicek-content">Tento balíček obsahuje CD s potiskem v obalu, které obsahuje Vaše přání pro danou osobu. Na obalu CD je napsané jméno, pro kterou osobu je CD určeno. <br /> Celková cena za jeden dárkový balíček je <b>599</b> (s DPH) + poštovné .</div>
            </div>
            <div class=" choice-layer-img-arrow"><img class="arrow" alt="Po vybrání typu objednávky vyplňte formulář" title="Po vybrání typu objednávky vyplňte formulář" data-type="vyber" data-scroll="form-layer" src="images/arrow.png"></div>  
        </div>
        <div id="form-layer" class="form-layer">
            <div class="form-layer-img-objednavka"><img src="images/objednavka.jpg"></div>
			<form method="POST" role="form" class="form-horizontal">
            <div class="form-layer-form">
                    <div class="form-layer-form-1" class="form-group">
                            <span>Typ objednávky </span><br />
							<input type="text" class="form-control" name="typ" id="form-select-content" readOnly="true"><br />
                            <span>Kontaktní údaje</span> <br/>
                            <input type="text" class="form-control" name="jmeno" placeholder="Jméno" maxlength="16" required> <br />
                            <input type="text" class="form-control" name="prijmeni" placeholder="Přijmení" maxlength="16" required> <br />
                            <input type="email" class="form-control" name="email" placeholder="Email" maxlength="40" required> <br />
                            <span>Adresa </span><br />
                            <input type="text" class="form-control" name="mesto" placeholder="Město" maxlength="30" required> <br />
                            <input type="text" class="form-control" name="ulice" placeholder="Ulice a číslo popisné" maxlength="40" required> <br />
                            <input type="number" class="form-control" name="psc" placeholder="PSČ" maxlength="5" required> <br />
                    </div>
                    <div class="form-layer-form-2" class="form-group">
                        <span>Název skladby </span><br />
                        <input type="text" class="form-control" name="skladba" id="form-audio-name" placeholder="Název skladby" readOnly="true"> <br />
                        <div class="form-layer-form-2-wish">
                            <span>Přání </span><br />
                            <textarea name="prani" class="form-control form-wish" maxlength="255" placeholder="Do tohoto pole napište přání, které bude v obalu."></textarea><br />
                        </div>
						<input type="checkbox" name="check-box" required> Souhlasím s pravidly<br/>
						<div class="form-layer-order-counter"></div>
						<span>Zásilky jsou na dobírku posílány českou poštou.<br />
						Celková cena je <strong><span class="total-price"></span></strong> ,- Kč (s DPH). <br />
                        <button type="submit" class="btn btn-default">Objednat</button>
                    </div>
                </form>
				</div>
            </div>
       
        <footer>
            <div class="footer-content">
                <div class="footer-content-table">
                <table>
                    <td colspan="5">©2014 All rights reserved</td>
                </table>
                </div>
                <div class="footer-content-links">
                    <table>
                        <td><a href="https://www.facebook.com/Hudbapromilacka" target="_blank"><img class="footer-link border-link" src="images/footer-fb.png"></a></td>
                    </table>
                </div>
            </div>
        </footer>
    </body>
</html>
