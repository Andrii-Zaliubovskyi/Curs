<?php
$a="";
if(isset($_POST['err'])){
	$a = $_POST['err'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Article</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="http://localhost/Test/Curs/Styles/regstyle.css" />
	</head>

<body>
	<div class="container">
		<ul id="menu">
			<li >
				<a href="http://localhost/Test/Curs/index.php">ГЛАВНАЯ</a>
			</li>
			<li >
				<a href="http://localhost/Test/Curs/index.php/blogs/allBlogs">БЛОГИ</a>
				<ul id="1" >
					<li><a href="#">11</a></li>
					<li ><a href="#">12 </a>
						<ul id="12">
							<li ><a href="#">121</a></li>
							<li ><a href="#">122</a></li>
							<li><a href="#">123</a></li>
						</ul> 
					</li>
					<li><a href="#">13</a></li>
				</ul>
			</li>
			<li>
				<a href="http://localhost/Test/Curs/index.php/registration/reg">РЕГИСТРАЦИЯ</a>
			</li>

			<li >
				<a href="http://localhost/Test/Curs/index.php">ВОЙТИ НА САЙТ</a>
				<ul id='4'>
					<li ><a href="#">41</a></li>
					<li><a href="#">42</a></li>
				</ul>
			</li>
			<li>
				<a href=\"file:///E:/HTML&JS%20Kursova/map.html\">КАРТА САЙТА</a>
			</li>
		</ul>
	</div>
	
	<div id="wrapper">
		<div id="sidebar">
		<div id ="news">
			<?if(isset($_SESSION['id'])):?>
				<button style="position:center;">
					<a href="http://localhost/Test/Curs/index.php/blogs/blog">Blog</a>
				</button>
			<?endif?>
			</div>
		</div>
		<div id="content">
			
			<form method="post" action="http://localhost/Test/Curs/index.php/registration/regHandler">	
				<div style="text-shadow: 1px 1px 2px black, 0 0 1em red; margin-left:10px; text-align:left; font-family:Arial; font-size:15px;">
					<div style="margin-left:20%; font-size:110%;">Login </div>
					<input style="position:relative; top:-24px; margin-left:34%;" type="text" name="login"/>
				</div>
				<div style="text-shadow: 1px 1px 2px black, 0 0 1em red; margin-left:10px; text-align:left; font-family:Arial; font-size:15px;">
					<div style="margin-left:20%; font-size:100%;">Password</div>
					<input type="password" name="password" style="position:relative; top:-24px; margin-left:34%;"/>
				</div>
				<input type="submit" value="Register" style="margin:10px; margin-left:40%; border-radius:5px;"/>
			</form>
				
			<div style="padding-top:20px; ">
				<h2 style="font-size:22pt; text-align:center; font-stretch: inherit;font-family: cursive;">
					<?if(isset($err)):?>
						<?=($err)?>
					<?endif?>
				</h2>
				
				
			</div>
			
		</div>

	</div>
	<div id="footer">
		
	</div>

	
	
	<script src='http://localhost/Test/Curs/jquery.js'>
		</script>
<script type="text/javascript" src="http://localhost/Test/Curs/scripts/mapScript.js"></script>
</body>
</html>