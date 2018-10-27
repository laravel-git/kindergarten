
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="class/css/bootstrap.min.css">
<script src="class/js/jquery.min.js"></script>
<script src="class/js/bootstrap.min.js"></script>

<title></title>
<style>
	table b ,i{
		font-size:20px;
	}
	.box a{
		color:white;
		font-size:20px;
	}
</style>
</head>
<body>
	<br><br>
	<div class="container">
		<nav class="navbar navbar-inverse box"> 
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="index.php">Bosh sahifa</a></li>
			  <li><a href="tarbiyachi.php">Xodimlar</a></li>
			  <li><a href="mashgulot.php">Mashg'ulotlar</a></li>
			  <li><a href="ovqatlar.php">Ovqatlar</a></li>
			  <li><a href="Bolalar.php">Bolalar</a></li>
			 </ul>
			 <ul class="nav navbar-nav navbar-right">
				  <li>
				  <form class="form-inline" action="admin.php" method="POST">
					<div class="form-group">
						<input style="margin-top:5%;" name = "login" type="text" class="form-control" placeholder="Login" required = "required">
					</div>
					<div class="form-group">
						<input style="margin-top:5%"type="password" name = "parol" class="form-control" placeholder="Parol" required = "required">
					</div>
					<div class="form-group">
						<input style="margin-top:10px; margin-right:10px" name = "bos" type="submit" class="btn btn-primary" value="Kirish">
					</div>
				  </form>
				  </li>
			  </ul>
			</div>
		</nav>
		</div>
		
		<div class="container">
			<h1 style="text-align:center">Bolalarni ro'yhatdan o'tkazish</h1>
		</div>
		
		<div class="container" >
		<form action="bola.php" method="POST" enctype="multipart/form-data">
				
			<div class="form-group">
			  <label for="familyasi">Ismi:</label>
			  <input type="text" class="form-control" id="familyasi"  placeholder="Ismini kiriting" name="name">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Familyasi:</label>
			  <input type="text" class="form-control" id="familyasi" placeholder="Familyasini kiriting" name="lname">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Otasini ismi:</label>
			  <input type="text" class="form-control" id="familyasi" placeholder="Otasini ismi" name="father">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Onasini ismi:</label>
			  <input type="text" class="form-control" id="familyasi" placeholder="Onasini ismi" name="mother">
			</div>
			
			<div class="form-group">
			  <label for="manzili">Manzili:</label>
			  <input type="text" class="form-control" id="manzili" placeholder="Turar joyi" name="address">
			</div>
			
			<div class="form-group">
			  <label for="sana">Tug'ilgan kuni:</label>
			  <input type="date" class="form-control" id="sana" name="sana">
			</div>
			
			<div class="form-group">
			  <label for="sana">Yoshi:</label>
			  <input max="6" min="2" type="number" class="form-control" id="sana" name="age">
			</div>
			
			<div class="form-group">
			  <label for="tel">Uy Telefoni:</label>
			  <input type="text" class="form-control"  id="tel"  name="tel">
			</div>
			
			<div class="form-group">
			  <label>Rasmi:</label>
			  <input type="file" class="form-control"  name="file">
			</div>
				
			<button type="submit" name = "add1" class="btn btn-success">Saqlash</button>
		</form>	
			 	<?php
				   if($_SERVER['REQUEST_METHOD'] == 'POST' ){
					if(isset($_POST['name'])){
						 $connect = mysqli_connect('localhost','root','','proekt');
						 $name = $_POST['name'];
						 $lname = $_POST['lname'];
						 $ota = $_POST['father'];
						 $ona = $_POST['mother'];
						 $age = $_POST['age'];
						 $address = $_POST['address'];
						 $day = $_POST['sana'];						
						 $tel = $_POST['tel'];
						 $image = time(). $_FILES['file']['name'];
						 $image = mysqli_real_escape_string($connect,$image);
						 $tmp = $_FILES['file']['tmp_name'];
						 move_uploaded_file($tmp,"images/". $image);
						  
						  $query = "insert into bolalar values(NULL,'$name','$lname','$ota','$ona','$address','$day','$age','$tel','$image');";
						 mysqli_query($connect,$query);
						 header("location:bolalar.php");
						 exit();
					}
					
				   }
				?>
	</div><br>
</body>
</html>

