<footer class="footer">
	<div class="footer__company">
		<?php if($copyright) echo $copyright; ?>&nbsp;&nbsp;
		<?php if($nameCompany) echo $nameCompany; ?>
		<br>
		e-mail: <?php if($eMail) echo $eMail; ?>
	</div>
	<div class="footer__location">
		<p><?php if($location) echo $location; ?></p>
	</div>
	<div class="footer__phones">
		<?php if($numPhone_1) echo $numPhone_1; ?><br>
		<?php if($numPhone_2) echo $numPhone_2; ?>
	</div>
</footer>
