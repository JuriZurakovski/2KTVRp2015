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
function get_all_posts(){ //

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
	/**
	*sozdajom pustoy massiv
	*/
	while ($row=mysql_fetch_assoc($result)) 
	{
		$posts[]=$row; 
		/**
		*analiz massiva
		*
		*/
	}

	close_database_connection($link); //zakon4ili rab s bd
	return $posts; //sdali klu4
}
