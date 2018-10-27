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
				  
					<a role="button" href="bola.php" style="margin:10px 10px; color:white" class="btn btn-success">Ro'yhatdan o'tkazish</a>
				  
				  </li>
			  </ul>
			</div>
		</nav>
		<div class="container">
			<h1 style="text-align:center"> Bog'chadagi bolalar haqida ma'lumotlar</h1>
		</div>
		<?php
		    $connect = mysqli_connect('localhost','root','','proekt');
			$query = "select *from bolalar order by day desc;";
		    $result = mysqli_query($connect,$query);
		    while($row = mysqli_fetch_array($result)){
				?>
		
		<div class="row " style="width:60%; margin-left:200px">
			<div class="panel-group">
				<div class="panel panel-default">
					<h2 class="text-center" ><?php echo $row['name'];?> <?php echo $row['lastname'];?></h2>

                    <div class="row">
						<div class="col-md-6">
							<img style="margin:5px 5px" src="images/<?php echo $row['image'];?>" class="img-rounded" width="350px" height="470px">
						</div>
						<div class="col-md-5">
							
							<table  class="table table-bordered">
								<tr class="info">
									<td><b style="display:inline">Ismi:</b></td>
									<td><i style="display:inline"><?php echo $row['name'];?></i></td>
								</tr>
								
								<tr class="warning">
									<td><b style="display:inline">Familyasi:</b></td>
									<td><i style="display:inline"><?php echo $row['lastname'];?></i></td>
								</tr>
								<tr class="info">
									<td><b style="display:inline">Otasini Ismi:</b></td>
									<td><i style="display:inline"><?php echo $row['father'];?></i></td>
								</tr>
								<tr class="info">
									<td><b style="display:inline">Onasini Ismi:</b></td>
									<td><i style="display:inline"><?php echo $row['mother'];?></i></td>
								</tr>
								<tr class="info">
									<td><b style="display:inline">Manzili:</b></td>
									<td><i style="display:inline"><?php echo $row['address'];?></i></td>
								</tr>
								<tr class="warning">
									<td><b style="display:inline">Tug'ilgan kuni:</b></td>
									<td><i style="display:inline"><?php echo $row['day'];?></i></td>
								</tr>
								<tr class="info">
									<td><b style="display:inline">Yoshi:</b></td>
									<td><i style="display:inline"><?php echo $row['age'];?></i></td>
								</tr>
								<tr class="warning">
									<td><b style="display:inline">Telefon:</b></td>
									<td><i style="display:inline"><?php echo $row['tel'];?></i></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
			<?php
			}
			?>
			</div>
</body>
</html>