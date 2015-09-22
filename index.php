<?php
	include_once 'Model/model.php';
	$posts=get_all_posts();
	echo "PRIVET";
	?>
				

				 <!DOCTYPE html>
				 <html lang="en">
				 <head>
				 	<meta charset="UTF-8">
				 	<title>Document</title>
				 </head>
				 <body>
				 <h2> CПисок постов</H2>
		<ul>
			<?php foreach ($posts as $post): ?>
			<li>
				<a href="#">
				 <?php echo $post['id'].'.'.$post['title']; ?>
				</a>
			</li>
				 <?php endforeach; ?>
		</ul>	
				 </body>
				 </html>