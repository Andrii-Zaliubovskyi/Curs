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
		<link rel="stylesheet" type="text/css" href="../../Styles/regstyle.css" />
	</head>

<body>
<div class="container">
		<ul id="menu">
			<li >
				<a href="http://localhost/Test/Curs/index.php">ГЛАВНАЯ</a>
			</li>
			<li >
				<a href="http://localhost/Test/Curs/index.php/blogs/alLBlogs">БЛОГИ</a>
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
			<button style="margin-top:25%;">
				<a href="http://localhost/Test/Curs/index.php/blogs/blog">Blog</a>
			</button>
			</div>
		</div>
		<div id="content">
			<form method="post" action="http://localhost/Test/Curs/index.php/blogs/saveArticle">	
				<div style="text-align:center; font-size:22px;">
					Enter your title of article here:
				</div>
				<div >
					<textarea rows="1" cols="60" style="margin-left:15%;" name="title"></textarea>
				</div>
				
				<div style="text-align:center; font-size:22px;">
					Enter your article here:
				</div >
				<div>
					<textarea rows="10" cols="60" style="margin-left:15%;" name="text"></textarea>
				</div>
				<input type="submit" value="Save" style="margin-left:45%;"/>
			</form>
			

				
				<div>
					<?if(isset($err)){?>
						<?print($err);?>
					<?}?>
				</div>
		</div>
	</div>
	<div id="footer">
		
	</div>

	
<script src='../../jquery.js'>
		</script>
	<script type="text/javascript" src="../../scripts/mapScript.js"></script>
</body>
</html>