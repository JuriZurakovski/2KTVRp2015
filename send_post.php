<?php
// conection to db Zurakovski
$connect = mysqli_connect("localhost","Juri","123","Zurakovski");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (id, avtor,  title, content)
VALUES ('$_post['id']', '$_post['avtor']', '$_post['title']','$_post['content']')";
?>
