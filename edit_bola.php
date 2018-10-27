
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
					$sel = "select * from bolalar where id = '$id';";
					$run = mysqli_query($connect,$sel);
				
					$row = mysqli_fetch_array($run);
						 $id = $row['id'];
						 $name = $row['name'];
						 $ota = $row['father'];
						 $ona= $row['mother'];
						 $lname = $row['lastname'];						 
					     $address = $row['address'];
						 $day = $row['day'];
						 $age = $row['age'];
						 $tel = $row['tel'];
						 $image = $row['image'];
						 
			 	
                         	
			
			
?>
	<div class="container" style="margin-top:5%;">
		<form action="edit_bola.php" method="POST" enctype="multipart/form-data">
				
			<div class="form-group">
			  <label for="familyasi">Ismi:</label>
			  <input type="text" class="form-control" id="familyasi" value = "<?php echo $name;?>" placeholder="Ismini kiriting" name="name">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Familyasi:</label>
			  <input type="text" class="form-control" id="familyasi"value = "<?php echo $lname;?>" placeholder="Familyasini kiriting" name="lname">
			</div>
			<div class="form-group">
			  <label for="familyasi">Otasini Ismi:</label>
			  <input type="text" class="form-control" id="familyasi"value = "<?php echo $ota;?>" placeholder="Otasini ismi" name="father">
			</div>
			<div class="form-group">
			  <label for="familyasi">Onasini Ismi :</label>
			  <input type="text" class="form-control" id="familyasi"value = "<?php echo $ona;?>" placeholder="Onasini ismi" name="mother">
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
			  <input type="number" class="form-control" value = "<?php echo $age;?>" id="lav"  name="age">
			</div>
			
			<div class="form-group">
			  <label for="tel">Telefoni:</label>
			  <input type="text" class="form-control" value = "<?php echo $tel;?>" id="tel"  name="tel">
			</div>
			
			<div class="form-group">
			  <label>Rasmi:</label>
			  <input type="file" class="form-control"  name="image">
			</div>
			
			<input type="hidden" name="edit1" value="<?php echo $id;?>">
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
					if(isset($_POST['name'])&& isset($_POST['edit1'])){
						 $id = $_POST['edit1'];
						
						 $connect = mysqli_connect('localhost','root','','proekt');
						 $name = $_POST['name'];
						 $ota = $_POST['father'];
						 $ona = $_POST['mother'];
						 $lname = $_POST['lname'];
						 $address = $_POST['address'];
						 $day = $_POST['sana'];
						 $age = $_POST['age'];
						 $tel = $_POST['tel'];
						 $query = "update bolalar set name = '$name',lastname ='$lname',father = '$ota',mother = '$ona',address = '$address',day='$day',age='$age',tel = '$tel' where id ='$id';";
						 mysqli_query($connect,$query);
						 header("location:kiritilgan_bolalar");;						 
					}
				   }
				?>
				