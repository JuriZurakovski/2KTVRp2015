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
{ //

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
