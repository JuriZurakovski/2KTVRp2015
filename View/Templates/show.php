<?php ob_start() ?>

<h2><?php echo $post['title'];?></h2>
<div>Data:<?php echo $post['date'];?></div>
<div>Tekst:<?php echo $post['content'];?></div>
<div>Avtor:<?php echo $post['avtor'];?></div>
	
	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>