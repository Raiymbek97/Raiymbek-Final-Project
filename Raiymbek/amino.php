<?php
	$conn = mysqli_connect("localhost","root","","users");
	session_start();
	if(isset($_POST["save"])) {
		$id = $_SESSION["id"];
		$name = $_POST["name"];
		$yourself = $_POST["yourself"];
		$password = $_POST["password"];
		$sql = "UPDATE `users` SET `name`=\"$name\",`yourself`=\"$yourself\",`password`=\"$password\" WHERE id=\"$id\"";
		mysqli_query($conn,$sql);
	}
	else if(isset($_POST["delete"])) {
		$id = (int)$_SESSION["id"];
		$sql = "DELETE FROM `users` WHERE id=\"$id\"";
		mysqli_query($conn,$sql);
		session_destroy();
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script-->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<style type="text/css">
.main {
	position: relative;
	left: 500px;
}
	.col-lg-4{
		height: 200px;
	}
	.kartinka1{
		width: 100%;
		height: 100%;
		background-color: white;
	}
	.kartinka2{
		width: 100%;
		height: 100%;
		background-color: green;
	}
	.kartinka3{
		width: 100%;
		height: 100%;
		background-color: yellow;
	}
	.kartinka4{
		width: 100%;
		height: 100%;
		background-color: red;
	}
	.kartinka5{
		width: 100%;
		height: 100%;
		background-color: blue;
	}
	.kartinka6{
		width: 100%;
		height: 100%;
		background-color: orange;
	}
	.back{
		background-image: url(fon6.jpg);
	}
</style>
<meta charset="UTF-8">
	<title>FitnessFit.com</title>
</head>
<body>
<div class="back">
	<div class="container-fluid">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				<div class="container-fluid">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#raim">
						<span class="sr-only">Open Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						Fitness Fit
					</a>
				</div>
				</div>
			<div class="collapse navbar-collapse" id="raim">
            <?php if(isset($_SESSION['login'])){
            	echo '<button type="button" class="btn btn-default navbar-btn navbar-right">'.$_SESSION['login'].'</button>';
            }else{
            ?><button type="button" class="btn btn-default navbar-btn navbar-right">
              <a href="registr.html">Sign Up</a>
            </button>
            <?php } if(isset($_SESSION['login'])){
            			echo '<a href="logout.php"><button type="button" class="btn btn-default navbar-btn navbar-right">logout</button></a>';
            	}else{	
            	?>
            <button type="button" class="btn btn-default navbar-btn navbar-right">
              <a href="Bootstrap Login &amp; Register Templates.html">Sign In</a>
            </button>
            <?php }?>
            <form class="navbar-form" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Поиск...">
              </div>
              <button type="submit" class="btn btn-default ">Искать!</button>
            </form>
          </div>
			<div class="container">
				<ul class="nav nav-pills">
  					<li role="presentation" class="active"><a href="index.php">Домой</a></li>
  					<li role="presentation"><a href="tovary.html">Протеины</a></li>
  					<li role="presentation"><a href="creatine.html">Креатины</a></li>
  					<li role="presentation"><a href="bcd.html">BCAA</a></li>
  					<li role="presentation"><a href="geiner.html">Гейнеры</a></li>
  					<li role="presentation"><a href="admin.php">Админ</a></li>
  					<li role="presentation"><a href="kontakty.html">Контакты</a></li>
				</ul>
			</div>
			</div>			
		</nav>
	</div>
<div class="main">
<?php echo "<div style=\"color: red; font-size: 15px;\">".$_SESSION['login']."</div><div style=\"color: red; font-size: 15px;\">".$_SESSION['yourself']."</div>"; ?>
<form method="POST" name="myForm" onsubmit="return(validate());">
			<div class="box">
				<input type="text" name="name" placeholder="Name">
			</div>
			<div class="box">
				<input type="text" name="yourself" placeholder="Yourself">
			</div>
			<div class="box">
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="box">
				<input type="submit" name="delete" value="DELETE"></input>
			</div>
			<input type="submit" name="save" value="Save changes"></input>
		</form>
</div>
<div class="container">
	<div class="divider1">
		<hr></hr>
	</div>	
</div>
<div class="footer">
  <div class="container">
	<div class="panel panel-default">
	<div class="container">
		<div class="page-body">
			<p>Designed by Bayandin Raiymbek</p>
			<p>Special for Informatrics Practice Lesson</p>
		</div>
	</div>	
	</div>
  </div> 
</div>
</div>
</div>
</body>
</html>