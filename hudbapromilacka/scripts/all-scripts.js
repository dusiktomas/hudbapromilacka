$(document).ready(function (){
   
   //Functions
    function scrollTo (layer) {
        $('html, body').animate({
         scrollTop: $("#"+layer).offset().top
         }, 1000); 
    }
    
	
	//RE-PICK
	
	$(".choice-repick").on('click', function (e){
		e.stopPropagation();
		e.preventDefault();
        $(".choice-layer").slideDown();
        scrollTo("choice-layer");
	});
    
    //GLOBAL 
    
    $(".border-link").on("mouseenter", function (){
       $(this).animate({"borderWidth" : "2"}, 120);
    });
    $(".border-link").on("mouseleave", function (){
       $(this).animate({"borderWidth" : "0"}, 120);
    });
	
    //HEADER EFFECT 
	$("#informace-link").on('click', function(){
	  $('.informace-layer').toggle(400);
	})
;	$(".information-layer-choice-click").on("click", function (e){
		e.stopPropagation();
        e.preventDefault();
		scrollTo('player-layer');
	});
	$(".information-layer-information-click").on('click', function(){
	  $('.informace-layer').toggle(400);
	})
	$(".informace-layer-zpet").on('click', function(){
	  $('.informace-layer').toggle(400);
	})
    $(".header-link").on("mouseenter", function (){
       $(this).animate({"borderWidth" : "2"}, 120);
    });
    $(".header-link").on("mouseleave", function (){
       $(this).animate({"borderWidth" : "0"}, 120); 
    });
    $(".header-logo").on("mouseenter", function (){
       $(this).animate({"borderWidth" : "2", "padding-top" : "7"}, 200); 
       $(".header-text").slideDown(220);
    });
    $(".header-logo").on("mouseleave", function (){
       $(this).animate({"borderWidth" : "0", "padding-top" : "0"}, 200);
       $(".header-text").slideUp(220);
    });
    $(".header-logo").on("click", function (){
       scrollTo("player-layer");
    });
    //Arrows effect and click  
    var arrow_progress = false;
    $(".arrow").on("mouseenter",function (e){
        var current_padding = $(this).css("padding-top").replace(/[^-\d\.]/g, '');
        if (!arrow_progress) {
            $(this).animate({"padding-top": Number(current_padding) + 15}, 260);
        }
    });
    $(".arrow").on("mouseleave",function (e){
        var current_padding = $(this).css("padding-top").replace(/[^-\d\.]/g, '');
        if (!arrow_progress) {
            arrow_progress = true; 
            $(this).animate({"padding-top": Number(current_padding) - 15}, 260, function (){
                arrow_progress = false;
            });
        }
    });
    $(".arrow").on("click",function (e){
       e.stopPropagation();
       e.preventDefault();
       var layer = $(this).data("scroll");
       scrollTo(layer);
    });
    //order
	$(".form-layer-form-2-wish textarea").on('keyup', function(){
	  var orderCounter = $(".form-layer-order-counter");
	  orderCounter.empty();
	  orderCounter.append($(this).val().length + '/255');
	});
	$(".deployment-checkbox").on('click', function () {
		if( ! $(this).is(':checked')){
			$(".deployment-adress").append("<span>Doručovací Adresa</span><br /><input type='text' class='form-control' name='dorucovaci_jmeno' placeholder='Jméno' maxlength='30' required> <br /><input type='text' class='form-control' name='dorucovaci_prijmeni' placeholder='Přijmení' maxlength='30' required> <br /><input type='text' class='form-control' name='dorucovaci_mesto' placeholder='Město' maxlength='30' required> <br /><input type='text' class='form-control' name='dorucovaci_ulice' placeholder='Ulice a číslo popisné' maxlength='40' required> <br /><input type='number' class='form-control' name='dorucovaci_psc' placeholder='PSČ' maxlength='5' required> <br />");
		}else{
			$(".deployment-adress").empty();
		}
	});
    
    //Icons effect and click
    var icon_progress = false;
    $(".icon").on("mouseenter",function (){
        if (!icon_progress){
            $(this).animate({"padding-top": "10px"}, 220);
            if ($(this).data("type") == "Dárkový Balíček") { 
                $("#text-balicek").animate({borderWidth: 2}, 120);
                $(".choice-layer-balicek-content").slideDown();
            }
            if ($(this).data("type") == "Skladba") {
				$(this).attr('placeholder', 'Pro přání si vyberte typ Dárkový Balíček');
                $("#text-skladba").animate({borderWidth: 2}, 120);
                $(".choice-layer-skladba-content").slideDown();
            }
        }
    });
    $(".icon").on("mouseleave",function (){
        if (!icon_progress) {
            //icon_progress = true; 
            $(this).animate({"padding-top": "0px"}, 220, function (){
                icon_progress = false;
            });
            if ($(this).data("type") == "Dárkový Balíček") { 
				$(".form-wish").attr('placeholder', 'Do tohoto pole napište přání, které bude v obalu.');
				$(".total-price").text('539');
                $("#text-balicek").animate({borderWidth: 0}, 120);
                $(".choice-layer-balicek-content").slideUp(200);
            }
            if ($(this).data("type") == "Skladba") { 
				$(".form-wish").attr('placeholder', 'Pro přání si vyberte typ Dárkový Balíček');
				$(".total-price").text('399');
                $("#text-skladba").animate({borderWidth: 0}, 120);
                $(".choice-layer-skladba-content").slideUp(200);
            }
        }
    });
    $(".icon").on("click",function (e){
       e.stopPropagation();
       e.preventDefault();
	   if ($(this).data("type") == "Dárkový Balíček"){
			$(".form-layer-form-2-wish textarea").prop('readOnly', false);
			$(".doprava-select").attr('disabled',false);
			$(".jmeno_osoby").attr('disabled',false);
			$(".doprava-select").val('Dobírka');
	   }else{
			$(".doprava-select").val('Platba předem');
			$(".doprava-select").attr('disabled',true);
			$(".jmeno_osoby").attr('disabled',true);
			$(".form-layer-form-2-wish textarea").prop('readOnly', true);
	   }
       $(".form-layer").slideDown(); 
        scrollTo ("form-layer");
        $("#form-select-content").val($(this).data("type"));
    });
    
    //PLAYER    
    $("#jquery_jplayer_1").jPlayer({
        supplied: "mp3",
        wmode: "window",
        preload:"auto",
        autoPlay: true,
        errorAlerts:false,
        warningAlerts:false
    });
    
    var before_item;
    $(".player-playlist-menu").on("click", function (e){
        e.stopPropagation();
        e.preventDefault();
        if (before_item) before_item.css({"color" : "rgb(51,51,51)"});
        $(this).css({"color" : "rgb(204,51,51)"});
        before_item = $(this);
        var name = $(this).text();
        var url = $(".player-playlist-menu").data("url");
        $("#jquery_jplayer_1").jPlayer("setMedia", {
            mp3: "as94/" + url,
            title: name
        });
        $("#jquery_jplayer_1").jPlayer("play");
    });
    $(".audio-pick").on("click",function (e) {
       e.stopPropagation();
       e.preventDefault();
       $(".choice-layer").slideDown();
       $("#form-audio-name").val($(this).data("nazev"));
       scrollTo("choice-layer");
    });
});
