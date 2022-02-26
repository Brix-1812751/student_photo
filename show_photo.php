<?php include "database.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

     <a href="index.php"><button>&#11013;Get Back</button></a>
     <?php
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);
          
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
	             <div class="alb">
	             	<img src="uploads/<?=$images['image_name']?>">
	             <b><?php echo pathinfo($images['image_name'], PATHINFO_FILENAME); ?> </b>
	             	             </div>

          		
    <?php }}else {
          	 echo 
			"
			<script>
				alert('No Uploaded Photo');
			</script>
			"
			;
          }?>
</body>
</html>