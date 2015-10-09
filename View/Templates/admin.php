<?php ob_start() ?>

<h2>Администрирование странички</h2>
<form action="index.php" method="POST" name="form1">

	<table>
		<tr>
			<td>Avtor:</td>
			<td><input type="text" name="add_avtor"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="text" name="add_date"></td>
		</tr>
		<tr>
			<td>Zagolovok:</td>
			<td><input type="text" name="add_title"></td>
		</tr>
		<tr>
			<td>Tekst:</td>
			<td><textarea name="add_content"></textarea></td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" value="CLEAR"></td>
			<td><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
	</table>
	</form>

	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>