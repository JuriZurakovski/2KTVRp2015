<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); // '1'= true

/*include_once 'vendor/autoload.php';*/
include_once 'Model/model.php';
include_once 'Model/PostModel.php';
include_once "Controller/controller.php";

include_once "Route/routing.php";

echo $response;	
	
/*--
//error_reporting (E_ALL);
//require_once 'vendor/autoload.php';
<!--<form action ="demo.asp">
	Autor: <input type="text" name="fname"><br>
	Title: <input type="text" name="fname"><br>
	Content: <textarea name="content" col="20" rows="30"></textarea><br>
	<input type="submit"   value="send">
	-->
<!--
<form onSubmit="send_post.php" method="post">
    <h3>Avtor:</h3>
    <input type="text" name="avtor">
    <h3>Title:</h3>
    <input type="text" name="title">
    <h3>Content</h3>
    <textarea rows="20" cols="30" name="content"></textarea>
    <input type="submit">
</form>
posthtml#form -->
 -*/
