<?php if(isset($_SESSION['jmeno'])): ?>

<script> 

	function scrollTo (layer) {
		$('html, body').animate({
		scrollTop: $("."+layer).offset().top
		}, 1000); 
	}

	$(document).ready(function (){
		$(".form-layer").slideDown();
		scrollTo('form-layer');
	});


 </script>
 <?php  
 
  @session_destroy();
 ?>
<?php endif; ?>