<html>
<head>
</head>
<body bgcolor="#99FFFF">

<?php
 mysql_connect("localhost","root","") or die("could not connect");
 mysql_select_db("blogdb") or die("database not found");
 $sql="SELECT * FROM blog";
 $result=mysql_query($sql);  
   ?>
   <table align="center">  
	          <tr>
			     <td>
				 <h1 style="color:#996633">ALL POST</h1>
				 </td>
			  </tr> 
				<?php 
      while($data=mysql_fetch_assoc($result)){
	       ?> 
	
	      <tr>
		       <td><h2 style="color:999933;"><?php echo $data["title"];?></h2></td>
		   </tr>
		   
		   <tr>
		       <td>
			      <h4>
				  <?php $str=$data["body"]; 
			         echo substr($str,0,37);
			        ?>
					<a href="index.php?action=details_view_post&id=<?php echo $data['blogId'];?>">Details</a>
			      </h4>
				</td>
		   </tr>
		   
		   <tr>
		       <td><h5><?php echo "POSTED ON ".$data["time"]; ?></h5></td>
		   </tr>
	      <?php } ?>
     </table> 
 </body>
 </html>
