<?if (!session_id() === null) session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>UserPage</title>
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
			<?if(isset($_SESSION['id'])):?>
				<button>
					<a href="http://localhost/Test/Curs/index.php/blogs/newArticle">Add article</a>
				</button>
				
				<button>
					<a href="http://localhost/Test/Curs/index.php/blogs/quit">Quit</a>
				</button>
			<?endif?>
			</div>
		</div>
		<div id="content">
			<h2 style="text-align:center; padding:5px; font-size:24pt;">
				List of Articles
			</h2>
				<ul>
					<?if(isset($articles)):?>
						<?for($i=0;$i<count($articles);$i++):?>
						<li style="margin-left:50px;width:700px;border-radius:20px; box-shadow: 4px -4px 6px 6px rgba(111,77,122,0.5); border:2px solid grey;">
							<a style="color:blue; text-align:center; padding:5px; text-decoration:none; text-shadow: 1px 1px 2px gold, 5px 5px 0.4em black; font-size:20pt; font-family:cursive;" href="http://localhost/Test/Curs/index.php/blogs/articles/<?=($articles[$i]['id']);?>"><h3><?=($articles[$i]['title']);?></h3></a>
							<div style="padding:10px; ">
								<?=($articles[$i]['text']);?>
							</div>
							<div style="padding:5px; font-size:9pt; color:#1c2c2c; font-weight:700;">Added: <?=($articles[$i]['date']);?></div>
							<?if(isset($_SESSION['blogId']) and $_SESSION['blogId'] == $articles[$i]['IdBlog']):?>
								<button style="position:relative;top:-25px;left:90%; padding:5px;border-radius: 10px;">
									<a style="text-decoration:none;" href="http://localhost/Test/Curs/index.php/blogs/deleteArticle/<?=($articles[$i]['id']);?>">
										Delete
									</a>
								</button>						
							<?endif?>		
						</li>		
							
						<?endfor?>
					<?endif?>					
				</ul>
			
		</div>
	</div>
	<div id="footer">
		
	</div>

	
	<script src='http://localhost/Test/Curs/jquery.js'>
		</script>
<script type="text/javascript" src="http://localhost/Test/Curs/scripts/mapScript.js"></script>
</body>
</html>

