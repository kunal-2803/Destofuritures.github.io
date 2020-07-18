<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}

else{
	echo "NO Connection";
}


mysqli_select_db($con,'destfurniture');

$user = $_POST['user'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$comments = $_POST['comments'];


$query = " insert into userinfodata (user,Email,Mobile,comments)
values ('$user', '$Email', '$Mobile', '$comments')";

mysqli_query($con,$query);

?>