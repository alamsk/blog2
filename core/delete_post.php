<?php
 $id=$_GET['id'];
 include("dbconnect.php");
 mysql_query("DELETE FROM `blog` WHERE `blogId`=$id");
 header("LOCATION:index.php?action=manage_post");
