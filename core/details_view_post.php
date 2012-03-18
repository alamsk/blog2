<html>
<head>
<style type="text/css">
.tbox{
 width:190px;
 
 }
.tsize
{width:250px;
height:100px}
</style>
</head>
<body bgcolor="#99FFFF">

<?php
 mysql_connect("localhost","root","") or die("could not connect");
 mysql_select_db("blogdb") or die("database not found");
 $id=$_GET['id'];
 $sql="SELECT * FROM blog where blogId=$id";
 $result=mysql_query($sql);  
      ?>
           <table align="center">     
			  <?php 
      while($data=mysql_fetch_assoc($result)){
	       ?> 
	
	      <tr>
		       <td width="200px" align="center"><h2 style="color:#996633"><?php echo $data["title"];?></h2></td>
		   </tr>
		   
		   <tr>
		       <td width="550px"><h4><?php echo $data["body"]; ?></h4></td>
		   </tr>
	      <?php } ?>
      </table>
	     
	  <?php
	    $sql="SELECT * FROM `comment` WHERE `blogId`=$id";
		$result=mysql_query($sql);
		      ?>
		  <p align="center" style="color:#FF0066;">ALL COMMENT</p>
		  <?php
	  while($data=mysql_fetch_assoc($result)){
	            ?>
				<p align="center" style="color:#996699">
				<?php
	           echo $data['userName'].'    says:'.'<br/>';
			   echo 'Date       Time'.'<br/>'; 
			   echo $data['time'].'<br/>';
			   echo $data['comments'].'<br/>'; 
	
		 ?> <a href="index.php?action=delete_comment&cid=<?php echo $data['commentId']; ?>&id=<?php echo $id;?>">Delete</a></p> <?php } ?>
		 

      <center>
	  <form action="index.php?action=create_comment&bid=<?php echo $id ?>&id=<?php echo $id ?>" method="post" name="form1">
	  <fieldset style="width:300px;">
	  <div align="left">
	  <label>Enter Name</label>
	   &nbsp;&nbsp;<input type="text" name="name" id="name" class="tbox">
	  </div><br/>
	    <div align="left">
	    <label>Enter Comment</label></div>
	   <textarea name="comment" id="comment" class="tsize"></textarea><br/><br/>
	   <input type="submit" name="checksub" id="checksub" value="Submit Comment">&nbsp;&nbsp;
	   <input type="reset" name="reset" id="reset" value="Reset">
	   </fieldset>
	    </form>
		<?php
	     if(isset($_GET['msg'])){
		   $msg=$_GET['msg'];
			echo $msg;
		 }
		 ?>
		</center>
	   </body>
      </html>