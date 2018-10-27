
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="class/css/bootstrap.min.css">
<script src="class/js/jquery.min.js"></script>
<script src="class/js/bootstrap.min.js"></script>
<title></title>
<style>
</style>
</head>
<body>
<?php

$connect = mysqli_connect('localhost','root','','proekt');
 
			 if(isset($_GET['id'])){
	              $id = $_GET['id'];
					$sel = "select * from users where id = '$id';";
					$run = mysqli_query($connect,$sel);
				
					$row = mysqli_fetch_array($run);
						 $id = $row['id'];
						 $name = $row['name'];
						 $lname = $row['lastname'];						 
					     $address = $row['address'];
						 $day = $row['birthday'];
						 $job = $row['job'];
						 $tel = $row['tel'];
						 $image = $row['image'];
						 
			 	
                         	
			
			
?>
	<div class="container" style="margin-top:5%;">
		<form action="edit.php" method="POST" enctype="multipart/form-data">
				
			<div class="form-group">
			  <label for="familyasi">Ismi:</label>
			  <input type="text" class="form-control" id="familyasi" value = "<?php echo $name;?>" placeholder="Familyasini kiriting" name="name">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Familyasi:</label>
			  <input type="text" class="form-control" id="familyasi"value = "<?php echo $lname;?>" placeholder="Familyasini kiriting" name="lname">
			</div>
			
			<div class="form-group">
			  <label for="manzili">Manzili:</label>
			  <input type="text" class="form-control" id="manzili" value = "<?php echo $address;?>"placeholder="Turar joyi" name="address">
			</div>
			
			<div class="form-group">
			  <label for="sana">Tug'ilgan kuni:</label>
			  <input type="date" class="form-control" id="sana"value = "<?php echo $day;?>" name="sana">
			</div>
			
			<div class="form-group">
			  <label for="lav">Lavozimi:</label>
			  <input type="text" class="form-control" value = "<?php echo $job;?>" id="lav"  name="job">
			</div>
			
			<div class="form-group">
			  <label for="tel">Telefoni:</label>
			  <input type="text" class="form-control" value = "<?php echo $tel;?>" id="tel"  name="tel">
			</div>
			
			<div class="form-group">
			  <label>Rasmi:</label>
			  <input type="file" class="form-control"  name="image">
			</div>
			
			<input type="hidden" name="edit" value="<?php echo $id;?>">
            <input type="submit" value="Saqlash" class="btn btn-success w-50">
			
		</form>	
				
	</div>	
	<?php
			 }
			 ?>
</body>
</html>
<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST'){
					if(isset($_POST['name'])&& isset($_POST['edit'])){
						 $id = $_POST['edit'];
						 $connect = mysqli_connect('localhost','root','','proekt');
						 $name = $_POST['name'];
						 $lname = $_POST['lname'];
						 $address = $_POST['address'];
						 $day = $_POST['sana'];
						 $job = $_POST['job'];
						 $tel = $_POST['tel'];
						 
						 
						 $query = "update users set name = '$name',lastname ='$lname',address = '$address',job='$job',birthday='$day',tel = '$tel' where id ='$id';";
						 mysqli_query($connect,$query);
						 header("location:admin.php");
						 exit();
						 
					}
				   }
				?>
				