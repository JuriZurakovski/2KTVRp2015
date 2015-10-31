<?php
/** 
* mozhno dokumentirovatj kod , nazv , avtor, dlja 4ego sozdan
* Kontroller  -soderit funcciji-action's
* kotoryje zastavljajut modelj vyvesti nuzhnuju informaciju.
*******************************************
*/
	function render_template($path, array $args)
	{							// obora4ivajet dannyje v html
		extract ($args);
		ob_start();
		require $path;
		$html = ob_get_clean();
		return $html;
	}

/**
* massiv $posts soderzhit vyborku vseh polej iz tablicy post
* podgruzhajet file list.php ,soderzhashij vid vyvoda inform iz $posts v browsere
*/
	
	function list_action()
	{

	$posts=get_all_posts();	
	$html=render_template('View/Templates/list.php', array ('posts'=>$posts));
	return $html;
		
		// reguire "View/Templates/list.php";
		//jesli ne vypolnitsja budet oshibka. Zagruzajet list.php		
	}
   //prohozhdenije po massivu, rabota s kazhdoj strokoj, funcija controllera
	function admin_action()
	{
		$posts=get_all_posts();	
				$html=render_template('View/Templates/admin.php', array ('posts'=>$posts));
			return $html;
		//require "View/Templates/admin.php";
	}
	function get_action ($id)
	{
		$post=get_post($id);
				$html=render_template('View/Templates/admin.php', array ('post'=>$post));
				return $html;		
		//require "View/Templates/show.php";
	}
	
	function add_action($id)
	{	
		add_post();

		$posts=get_all_posts();	
		$html=render_template('View/Templates/admin.php', array ('posts'=>$posts));
		return $html;	
		//require "View/Templates/show.php";
		 // require "View/Templates/list.php";

	}
	
	function firmast_action ()
	{
		$html=render_template('View/Templates/firmast.php', array ());
		return $html;
		//require "View/Templates/firmast.php";
	}
	function show_action($id)
	{
		$post=get_post($id);
		
		$html=render_template('View/Templates/show.php', array ('post'=>$post));
		return $html;
		//require "View/Templates/show.php";

	}

	function remove_action ($id)
	{	
		remove_post($id);

		$posts=get_all_posts();	
		$html=render_template('View/Templates/admin.php', array ('posts'=>$posts));
		return $html;	
		//require "View/Templates/show.php";
		 // require "View/Templates/list.php";

	}
	function edit_action ($id)
	{	
		edit_post($id);

		$posts=get_all_posts();	
		$html=render_template('View/Templates/admin.php', array ('posts'=>$posts));
		return $html;