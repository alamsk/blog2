<?php
  $id=$_GET['id'];
 if(isset($_POST['checksub'])){
     $comm=$_POST['comment'];
     $blogId=$_GET['bid'];
	 $name=$_POST['name'];
  include('dbconnect.php');
  mysql_query("INSERT INTO `comment` (`blogId`,`userName`,`comments`) values('$blogId','$name','$comm')");
     header("LOCATION:index.php?action=details_view_post&id=$id&msg=Comment Submitted");
      }
?>