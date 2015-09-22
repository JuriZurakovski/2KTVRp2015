<?php
function open_database_connection(){
	$link=mysql_connect('localhost','Juri','123');
	mysql_select_db('Zurakovski', $link);	
	mysql_query('SET NAMES utf8');
	return $link;
}
function close_database_connection($link){
	mysql_close($link);

}
function get_all_posts(){
	$link=open_database_connection();
	$sql="SELECT * FROM post";
	$result=mysql_query($sql, $link);
	$post=$array();
	while ($row=mysql_fetch_assoc($result)) {
		$post[]=$row;
	}
	close_database_connection($link);
	return $posts;
}