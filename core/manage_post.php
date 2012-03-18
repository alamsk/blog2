<html>
<head>
</head>
<body bgcolor="#99FFFF">
<?php
if(isset($_GET['msg'])){
$msg=$_GET['msg'];
 }
?>
<?php
include('dbconnect.php');
$sql="SELECT * FROM `blog`";
$result=mysql_query($sql);
?>
 <table align="center" width="400px">
   <tr bgcolor="#999900">
     <td width="200px">TITLE</td>
     <td width="200px">OPTIONS</td>
   </tr>

   <?php
  while($data=mysql_fetch_assoc($result)){
        ?>
     <tr>
	    <td width="200px"><?php echo $data['title'] ?></td>
	    <td width="200px"><a href="index.php?action=edit_post&id=<?php echo $data['blogId'] ?>">Edit</a><a href="index.php?action=delete_post&id=<?php echo $data['blogId'] ?>">&nbsp;|&nbsp;Delete </a></td>
	 </tr>
    <?php } ?>
    </table>
</body>
</html>
