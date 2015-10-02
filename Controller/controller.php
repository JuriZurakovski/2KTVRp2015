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
	$posts=get_all_posts();   //prohozhdenije po massivu, rabota s kazhdoj strokoj, funcija controllera
	require "View/Templates/list.php";	//jesli ne vypolnitsja budet oshibka. Zagruzajet list.php

?>
