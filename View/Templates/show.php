<?php ob_start() ?>

<h2><?php echo $post['title'];?></h2>
<div>Data:<?php echo $post['date'];?></div>
<div>Tekst:<?php echo $post['content'];?></div>
<div>Avtor:<?php echo $post['avtor'];?></div>

	<h2>Редактирование/удаление записи</h2>
<form action="remove" method="POST" name="form2">

	<table>
		<tr>
			<td>Avtor:</td>
			<td><input type="text" name="remove_avtor"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="text" name="remove_date" value='<?php echo date("Y-m-d H:i:s"); ?>'></td>
		</tr>
		
		<tr>
			<td>Zagolovok:</td>
			<td><input type="text" name="remove_title"></td>
		</tr>
		<tr>
			<td>Tekst:</td>
			<td><textarea name="remove_content"></textarea></td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" value="REMOVE"></td>
			<td><input type="submit" name="submit" value="EDIT"></td>
		</tr>
	</table>
</form>
	
	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>
