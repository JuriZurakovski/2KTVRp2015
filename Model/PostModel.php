<?php
class PostModel{
	
private $dbh;
private $user="Juri";
private $pass="123";
private $db="Zurakovski";
private $charset="UTF8";
private $host="localhost";

/**
* konstruktor
* http://phpfaq.ru/pdo
*/
function PostModel(){

$dsn="mysql:host=$this->host; dbname=$this->db; charset=$this->charset";
$opt=array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$this->dbh=new PDO($dsn,$this->user, $this->pass, $opt);}


/** dobavljajem vse zapisi iz tablicy post
* vozvrashajem massiv zapisej tabl $posts.
*/

public function get_all_posts (){

//$link=open_database_connection();

	$sql='SELECT id,title FROM post';
	$stmt=$this->dbh->query($sql);

	$posts=array();
	while ($row=$stmt->fetch()){
		$posts[]=$row;
	}
	//close database_connection (link);

	return $posts;
}


public function get_post_by_id($id)
{
	//$link=open_database_connection(); 
	/**
	*klu4 raboty s BD 
	*/
	$sql="SELECT 'avtor', 'title','content','data' FROM post WHERE id=?"; //? - placeholder
	$stmt=$this->dbh->prepare($sql);
	$stmt->execute([$id]);
	/**
	*vse zapisi v bd
	*/
	//$result=mysql_query($sql, $link); 
	/**
	*pomeshajem vyborku v bd
	* $row=mysql_fetch_assoc($result); 
	*/
	//$post=mysql_fetch_assoc($result);
	$post=$stmt->fetch();

	//close_database_connection($link); //zakon4ili rab s bd
	return $post; //sdali klu4
}
function list_action(){
	$postsModel=new PostModel();
	$posts =$postModel->get_all_posts();
	
	}
function add_action()
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
	{	$model=new PostModel();
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
	}

}