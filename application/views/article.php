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
				<button>
					<a href="http://localhost/Test/Curs/index.php/blogs/quit">Quit</a>
				</button>
			<?endif?>
			</div>
		</div>
		<div id="content">
			<?if(isset($article)):?>
				<div style="margin-left:50px;width:700px;border-radius:20px; box-shadow: 4px -4px 6px 6px rgba(111,77,122,0.5); border:2px solid grey;">
					<div style="color:blue; text-align:center; padding:5px; text-decoration:none; text-shadow: 1px 1px 2px gold, 5px 5px 0.4em black; font-size:20pt; font-family:cursive;"><h3><?=($article['Title']);?></h3></div>
					<div style="padding:10px; ">
						<?=($article['Text']);?>
					</div>
					<div style="padding:5px; font-size:9pt; color:#1c2c2c; font-weight:700;">Added: <?=($article['Date']);?></div>
						<?if(isset($_SESSION['blogId']) and $_SESSION['blogId'] == $article['IdBlog']):?>
							<button style="position:relative;top:-25px;left:90%; padding:5px;border-radius: 10px;">
								<a style="text-decoration:none;" href="http://localhost/Test/Curs/index.php/blogs/deleteArticle/<?=($article['Id']);?>">
									Delete
								</a>
							</button>						
						<?endif?>
				</div>		
			<?endif?>
			
			<form method="post" action="http://localhost/Test/Curs/index.php/blogs/addComment/<?=($article['Id']);?>">	
				
				<div style="text-align:center; font-size:22px;">
					Enter your comment here:
				</div >
				<div>
					<textarea rows="10" cols="60" style="margin-left:18%;" name="text"></textarea>
				</div>
				<input type="submit" value="Save" style="margin:10px; margin-left:48%; border-radius:5px;"/>
			</form>
				
			<div style="padding-top:20px; ">
				<h2 style="font-size:22pt; text-align:center; padding:20px; font-stretch: inherit;font-family: cursive;">Comments</h2>
			
				<div style="margin-left:50px;width:700px;border-radius:20px; box-shadow: 4px -4px 6px 6px rgba(111,77,122,0.5); border:2px solid grey;">
					<div style="padding:5px; font-size:9pt; color:#1c2c2c; font-weight:700;">
						Added: 2014-03-11
					</div>
					<div style="float:right; padding:5px; font-size:10pt; color:#1c2c2c; font-weight:700;">
						By: Vasya	
					</div>
					<div style="text-align:center; padding:5px; font-size:12pt; color:#1c2c2c; font-weight:700;">
						Very good article Thank you! Very good article Thank you! 
					</div>
				</div>
				
				<?if(isset($comments)):?>
					<?for($i=0;$i<count($comments);$i++):?>
						<div style="margin-left:50px;width:700px;border-radius:20px; box-shadow: 4px -4px 6px 6px rgba(111,77,122,0.5); border:2px solid grey;">
							<div style="padding:5px; font-size:9pt; color:#1c2c2c; font-weight:700;">
								Added: <span style="color: blue; font-size:110%; ">
											<?=$comments[$i]['Date']?>
										</span>
							</div>
							<div style="position:relative; padding:5px;  font-size:10pt; color:#1c2c2c; font-weight:700;">
								By: <span style="color: red; font-size:120%; text-decoration: underline;">
										<?=$comments[$i]['User']?>
									</span>
							</div>
							<div style="text-align:center; padding:5px; font-size:12pt; color:black; font-weight:700;">
								<?=$comments[$i]['Text']?> 
							</div>
						</div>
					<?endfor?>
				<?endif?>
				
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