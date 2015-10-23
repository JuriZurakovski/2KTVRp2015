<?php
function open_database_connection(){
	$link=mysql_connect('localhost','Juri','123');
	mysql_select_db('Zurakovski', $link);	
	mysql_query('SET NAMES utf8');
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}
function get_all_posts()
{ //

	$link=open_database_connection(); 
	/**
	*klu4 raboty s BD 
	*/
	$sql="SELECT * FROM post"; 
	/**
	*vse zapisi v bd
	*/
	$result=mysql_query($sql, $link); 
	/**
	*pomeshajem vyborku v bd
	*/
	$posts=array();

	while ($row=mysql_fetch_assoc($result)) {
		$posts[]=$row;
		# code...
	}

	close_database_connection($link); //zakon4ili rab s bd
	return $posts; //sdali klu4
}
function get_post($id)
{
	$link=open_database_connection(); 
	/**
	*klu4 raboty s BD 
	*/
	$sql="SELECT * FROM post WHERE id='$id'"; 
	/**
	*vse zapisi v bd
	*/
	$result=mysql_query($sql, $link); 
	/**
	*pomeshajem vyborku v bd
	*/
	$post=mysql_fetch_assoc($result);

	close_database_connection($link); //zakon4ili rab s bd
	return $post; //sdali klu4
}
	function add_post()
	{
		$avtor=$_REQUEST ['add_avtor'];
		$data=date("Y-m-d H:i:s");
		$content=$_REQUEST['add_content'];
		$title=$_REQUEST['add_title'];

		$link=open_database_connection();

		$sql="INSERT INTO post ( avtor, date, title, content) 
		VALUES ('$avtor','$date','$title','$content')";

		$result=mysql_query($sql, $link); 

		close_database_connection($link);
	}
	function remove_post ($id)
{ 
	$link=open_database_connection(); 
	/**
	*klu4 raboty s BD 
	*/
	$sql="DELETE FROM post WHERE id='$id'"; 
	/**
	*vse zapisi v bd
	*/
	$result=mysql_query($sql, $link); 
	/**
	*pomeshajem vyborku v bd
	*/
	$post=mysql_fetch_assoc($result);

	close_database_connection($link); //zakon4ili rab s bd
	return $post; //sdali klu4
}