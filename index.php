<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<style>
		body {
			background: url(https://lh3.googleusercontent.com/fhGpiZ_Fpl14oSQRJI0i3UOGYdbnF2d5Gr9n8WlFDSR3w5keNE1_lkMIhSo_YV89D2TJdxU1a16D5YesmYDZZPTCuEU0n8pONZgEwqMtvgo_zmtdThr6WqTsD51WQbs2mSb6lHMviUb3UO3pay5FIJcE8pjfqEEyxBa_YelMAhpNnESanNUXcKgRN_KSc8ZvZIkouALvde4bNAE6KQX4bvJAXzyeifIo3Ugw_uy6se8zU06eskWebPmDhXs5EwyVpstX8mIOdG0BT43wUG0PEV9oHgkJXVFy9zed88V3dYOjsi5n0y_kE0zsQgtGoAMd_Ryt42Gvc4j9-w50-sRqftWy8ffAqiTTHhi6T3q31MRKEH7rN2lwt3MzgLQ2QxjYSVLE6VXzkrQVa4Pj5ZwBShyXcqfdxzPBN-iOucBoWB5VN82RJN07UC7jqIxZ0a7bf8U8RZp885-gSKRH7n4y405MW54xKj1QTQ3iMm9Xomh8Gba_t_jKzSPY2aJDN-zu5t1zbyI7fkCdGztR2u-X3yxHjzRKyEgkiC1aePK0y4DFdjrD4q_bUi-QhpG5lsHF8TFKM6rxjGncpobJY1xcb2fv1RcaGRcCXcxXv25Qj0q_OPYZA0vif-hgiIBRrXw-03D7nJKkyhdKGKqVlJv6_MgAR5wNeWBcgJ5sANO3DvHh0tBPLYFrQP_e3zbVhAue5lZuBKaRFczMV_cPuobvmSy9=w1064-h625-no?authuser=0);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>

     <form action="upload.php" method="post" enctype="multipart/form-data">
     	   <p>Enter the Name of Student</p>
		   <input type="text" name="student_name" placeholder="Student Name">
		   <br>
		   <br>
		   <p>Upload a Photo of Student</p>
           <input type="file" name="student_image">
		   <input type="submit" name="submit" value="Upload">
     	   
     </form>
     
     <form action="show_photo.php" method="post" enctype="multipart/form-data">
     	<button type="Photo" name="Photo" value="Photo" >Student Album</button>
 		<?php
     		if(isset($_POST['Photo'])){
     		include("show_photo.php"); 
     		}
     		?>
     </form>
     
     	
     

</body>
</html>