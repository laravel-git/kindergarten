<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
		if(!empty($_POST['login']) && !empty($_POST['parol']) && isset($_POST['bos'])){
			$login = $_POST['login'];
			$parol = $_POST['parol'];
			$connect = mysqli_connect('localhost','root','','proekt');
			$query = "select *from admin;";
			$result = mysqli_query($connect,$query);
			$row = mysqli_fetch_array($result);
			if($login == $row['login'] && $parol == $row['parol']){
				header("location:admin.php");
				exit();
			}
			else{
				header("location:index.php");
				exit();
			}
		}
	}
?>
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
			  <li><a href="bolalar.php">Bolalar</a></li>
			 </ul>
			   <ul class="nav navbar-nav navbar-right">
				  <li>
				   <a class = "btn btn-success"style = "margin:10px 10px;color:white;" href = "kiritilgan_bolalar">Kiritilgan Bolalar</a>
				  </li>
			  </ul>
			 
			</div>
		</nav>
		</div>
		
		<div class="container">
			<h1 style="text-align:center">Yangi xodimlarni kiritish</h1>
		</div>
		
		<div class="container" >
		<form action="admin.php" method="POST" enctype="multipart/form-data">
				
			<div class="form-group">
			  <label for="familyasi">Ismi:</label>
			  <input type="text" class="form-control" id="familyasi"  placeholder="Ismini kiriting" name="name">
			</div>
			
			<div class="form-group">
			  <label for="familyasi">Familyasi:</label>
			  <input type="text" class="form-control" id="familyasi" placeholder="Familyasini kiriting" name="lname">
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
			  <label for="lav">Lavozimi:</label>
			  <input type="text" class="form-control"  id="lav"  name="job">
			</div>
			
			<div class="form-group">
			  <label for="tel">Telefoni:</label>
			  <input type="text" class="form-control"  id="tel"  name="tel">
			</div>
			
			<div class="form-group">
			  <label>Rasmi:</label>
			  <input type="file" class="form-control"  name="file">
			</div>
				
			<button type="submit" name = "add" class="btn btn-success">Saqlash</button>
		</form>	
			 	<?php
				   if($_SERVER['REQUEST_METHOD'] == 'POST'){
					if(isset($_POST['name']) && isset($_FILES['file'])){
						 $connect = mysqli_connect('localhost','root','','proekt');
						 $name = $_POST['name'];
						 $lname = $_POST['lname'];
						 $address = $_POST['address'];
						 $day = $_POST['sana'];
						 $job = $_POST['job'];
						 $tel = $_POST['tel'];
						 $image = time(). $_FILES['file']['name'];
						 $image = mysqli_real_escape_string($connect,$image);
						 $tmp = $_FILES['file']['tmp_name'];
						 move_uploaded_file($tmp,"images/". $image);
						 $query = "insert into users values(NULL,'$name','$lname','$address','$image','$job','$day','$tel');";
						 mysqli_query($connect,$query);
						 header("location:admin.php");
						 exit();
					}
					
				   }
				?>
	</div><br>
	<div class = "container">
		<table class = "table table-bordered" align = "center">
		       <tr align = "center">
			      <td colspan = "9"><h2>Barcha Xodimlar</h2></td>
			   </tr>
			   <tr align = "center">
			      <th>ID</th>
				  <th>Ismi:</th>
				  <th>Familiyasi</th>
				  <th>Manzili</th>
				  <th>T_kuni</th>
				  <th>Lavozimi</th>
				  <th>Telefon</th>
				  <th>O'chirish</th>
				  <th>Tahrirlash</th>
			   </tr>
			   <?php
			   $connect = mysqli_connect('localhost','root','','proekt');
			   $sel = "select * from users";
					$run = mysqli_query($connect,$sel);
					$i = 0;
					while($row = mysqli_fetch_array($run)){
						 $id = $row['id'];
						 $name = $row['name'];
						 $lname = $row['lastname'];
					     $address = $row['address'];
						 $date = $row['birthday'];
						 $job = $row['job'];
						 $tel = $row['tel'];
                         $i ++;						 
					 
			   ?>
			   <tr>
			      <td><?php echo $i ;?></td>
				  <td><?php echo $name ;?></td>
				  <td><?php echo $lname ;?></td>
				  <td><?php echo $address ;?></td>
				  <td><?php echo $date ;?></td>
				  <td><?php echo $job ;?></td>
				  <td><?php echo $tel ;?></td>
				  <td><a href = "admin.php?id=<?php echo $id ;?>">O'chirish</a></td>
				  <td><a href = "edit.php?id=<?php echo $id ;?>">O'zgartirish</a></td>
				  
			   </tr>
					<?php  } ?>
		 </table>
		</div>
		
</body>
</html>
<?php
 if(isset($_GET['id'])){
	  $id = $_GET['id']; 
	  $connect = mysqli_connect('localhost','root','','proekt');
	  $query = "delete from users where id = '$id';";
	  mysqli_query($connect,$query);
	  header("location:admin.php");
	  exit();
 }
?>