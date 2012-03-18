  <?php
 $cmt=$_GET['cid'];
 $id=$_GET['id'];
  mysql_connect("localhost","root","") or die("could not connect");
  mysql_select_db("blogdb");
  mysql_query("DELETE FROM `comment` WHERE `commentId`=$cmt");
  printf(mysql_affected_rows());
  header("LOCATION:index.php?action=details_view_post&id=$id");