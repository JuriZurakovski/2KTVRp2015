<?php ob_start() ?>

<h2>Администрирование странички</h2>
<form action="/2KTVRp2015/index.php/add" method="POST" name="form1">

	<table>
		<tr>
			<td>Avtor:</td>
			<td><input type="text" name="add_avtor"></td>
		</tr>
		<tr>
			<td>Data:</td>
			<td><input type="text" name="add_date" value='<?php echo date("Y-m-d H:i:s"); ?>'></td>
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


<h2>List of posts</h2>
	<ul>
		<?php
			foreach ($posts as $post):
		?>
		<li>
			<a href="/2KTVRp2015/index.php/show?id=<?php echo $post['id'];?>">
				<?php echo $post['id'].'. '.$post['title'];?>
			</a>
			<a href="/2KTVRp2015/index.php/remove?id=<?php echo $post['id'];?>"> Remove </a>
			<!--<a href="/2KTVRp2015/index.php/edit?id=<?php echo $post['id'];?>"> Edit</a> -->
		</li>
		

		<?php endforeach; ?>
	</ul>
	
	

	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>