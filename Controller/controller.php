<?php
/** 
* mozhno dokumentirovatj kod , nazv , avtor, dlja 4ego sozdan
* Kontroller  -soderit funcciji-action's
* kotoryje zastavljajut modelj vyvesti nuzhnuju informaciju.
*******************************************
*/

/**
* massiv $posts soderzhit vyborku vseh polej iz tablicy post
* podgruzhajet file list.php ,soderzhashij vid vyvoda inform iz $posts v browsere
*/
	
	function list_action()
	{
	$posts=get_all_posts();	
	require "View/Templates/list.php";	//jesli ne vypolnitsja budet oshibka. Zagruzajet list.php		
	}
   //prohozhdenije po massivu, rabota s kazhdoj strokoj, funcija controllera
	function admin_action()
	{
		$posts=get_all_posts();		
	require "View/Templates/admin.php";
	}
	function show_action ($id)
	{
		$post=get_post($id);		
	require "View/Templates/show.php";
	}
	function render_template ($path, array $args)
	{
		extract ($args);	
	}

?>
