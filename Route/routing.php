<?php
echo $_SERVER['REQUEST_URI'];
	$uri=$_SERVER['REQUEST_URI'];

	$u=explode('?',$uri);
	$uri=$u[0];
	echo "<br>newUri=".$uri;
	if ($uri=='/2KTVRp2015/' OR $uri=='/2KTVRp2015/index.php')
		{ 
			list_action();
		}
	elseif ($uri=='/2KTVRp2015/index.php/admin')
	{
		admin_action();
	}
	elseif ('/2KTVRp2015/index.php/show' == $uri)
	{
		show_action($_REQUEST['id']);
	}

	?>