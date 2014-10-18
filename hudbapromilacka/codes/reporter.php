<?php if(@$_GET["sucess"] == 'true'):?>
	<div class="status-report">
		<center><div class="order-sucess">Vaše objednávka byla přijata, potvrzení s číslem objednávky Vám zašleme na email do 24 hodin.</div></center>
	</div>
<?php elseif(isset($_GET["sucess"])): ?>
	<div class="status-report-false">
		<center><div class="order-sucess">Vaše objednávka se nezdařila, prosím ujistěte se, že zadáváte správné údaje.</div></center>
	</div>
<?php endif;?>
