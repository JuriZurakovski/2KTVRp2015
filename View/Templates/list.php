<?php ob_start() ?>

<h2>List of posts</h2>
	<ul>
		<?php
			foreach ($posts as $post):
		?>
		<li>
			<a href="/2KTVRp2015/index.php/show?id=<?php echo $post['id'];?>">
				<?php echo $post['id'].'. '.$post['title'];?>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>

	<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/layout.php";?>