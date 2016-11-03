<?if (!session_id() === null) session_start();?>
<!DOCTYPE html>
<html>
	<head>

		<title>Форма регистрации</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles/regstyle.css" />

	</head>

<body>
	<div class="container">
		<ul id="menu">
			<li >
				<a href=\"http://localhost/Test/Curs/index.php">ГЛАВНАЯ</a>
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
			<div style="text-shadow: 1px 1px 2px black, 0 0 1em red; margin-left:10px; color:chartreuse; margin-bottom:3px; text-align:center; font-family:cursive; font-size:25px;">Log in</div>
			<?if(!isset($_SESSION['id'])):?>
				<form method='post' action='index.php/registration/authHandler'>
					<div style="text-shadow: 1px 1px 2px black, 0 0 1em red; margin-left:10px; text-align:left; font-family:Arial; font-size:15px;">Login<input style="float:right; margin-right:20px;" name="login" type="text"/></div><br/>
					<div style="text-shadow: 1px 1px 2px black, 0 0 1em red; margin-left:10px; text-align:left; font-family:Arial; font-size:15px;">Password<input style="float:right; margin-right:20px;" name="password" type="text"/></div><br/>
					
					<input style="margin:5px 10px;" type="submit" value="   Login   " />
					
					<button>
						<a href="index.php/registration/reg">Registration</a>
					</button>
				</form>
			<?endif?>
			<?if(isset($_SESSION['id'])):?>
			<?=$_SESSION['id'];?>
			<?=$_SESSION['login'];?>
				<button>
					<a href="http://localhost/Test/Curs/index.php/blogs/newArticle">Add article</a>
				</button>
				
				<button>
					<a href="http://localhost/Test/Curs/index.php/blogs/quit">Quit</a>
				</button>
			<?endif?>
			<div>

			</div>
			
			</div>
		</div>
		<div id="content">
			
		</div>
	</div>
	<div id="footer">
		
	</div>
	
	
	<script src='http://localhost/Test/Curs/jquery.js'>
		</script>
<script type="text/javascript" src="http://localhost/Test/Curs/scripts/mapScript.js"></script>
</body>
</html>