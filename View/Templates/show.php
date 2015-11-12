<?php ob_start() ?>

<a href="/2KTVRp2015/index.php/edit?id=<?php echo $post['id'];?>">
				<?php echo $post['id'].'. '.$post['$avtor']."&nbsp/&nbsp".$post['$title']."&nbsp;/&nbsp;";?>
</a>

<div>Avtor:<?php echo $post['avtor'];?></div>
<div>Zagolovok:<?php echo $post['$title'];?></div>
<div>Data:<?php echo $post['$date'];?></div>
<div>Tekst:<?php echo $post['$content'];?></div>



	<h2>Редактирование записи</h2>
<form action="edit" method="POST" name="form2">

	<table>
		<tr>
			<td>Avtor:</td>
			<td><input type="text" name="edit_avtor"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="text" name="edit_data" value='<?php echo date("Y-m-d H:i:s"); ?>'></td>
		</tr>
		
		<tr>
			<td>Zagolovok:</td>
			<td><input type="text" name="edit_title"></td>
		</tr>
		<tr>
			<td>Tekst:</td>
			<td><textarea name="edit_content"></textarea></td>
		</tr>
		<tr>
			<!-- <td><input type="reset" name="reset" value="REMOVE"></td> -->
			<td><input type="submit" name="edit" value="EDIT"></td>
		</tr>
	</table>
</form>
	
	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>


