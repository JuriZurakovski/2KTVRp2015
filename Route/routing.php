<?php
echo $_SERVER['REQUEST_URI'];
	$uri=$_SERVER['REQUEST_URI'];

	$u=explode('?',$uri);
	$uri=$u[0];
	$uri=rtrim($uri,"/");
	echo "<br>newUri=".$uri;
	if ($uri=='/2KTVRp2015' OR $uri=='/2KTVRp2015/index.php')
		{ 
			$response=list_action();
			//list_action();
		}
	elseif ($uri=='/2KTVRp2015/index.php/admin')
	{
		$response=admin_action();
		//admin_action();
	}
	elseif ('/2KTVRp2015/index.php/show' == $uri)
	{
		$response=show_action($_REQUEST['id']);
		//get_action($_REQUEST['id']);
	}

	elseif ('/2KTVRp2015/index.php/firmast' == $uri)
	{
		$response=firmast_action();
		//irmast_action();
	}
	elseif ('/2KTVRp2015/index.php/add' == $uri)
	{
		$response=add_action();
		//add_action();
	}
	elseif ('/2KTVRp2015/index.php/remove' == $uri)
	{
		$response=remove_action($_REQUEST['id']);
		//add_action();
	}