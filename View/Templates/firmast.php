<?php
	ob_start () ?>

	<h2> firmast </h2>
	<p> see on minu esimene too </p>
	<br> firma on asutud 1803. aastal</br>  

	<?php $content=ob_get_clean (); ?>

	<?php  
	include "View/Templates/layout.php";
	?>