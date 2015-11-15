<?php
	include("utils.php");
	$blog = "../blog/blog.txt"
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
	<link href="../css/main.css" rel="stylesheet">
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
	</script>
	<title>Shan Yang - Who I AM</title>
	
</head>
	
<body>
	<h1>Shan Yang - Blog</h1>
	
	<hr />
	<div id = "horizontal">
		<ul>
			<li id="front"><a href="../index.php"><img src="../images/icon/1.png" alt="front" /> Front Page </a></li>
			<li id="resume"><a href="resume.php"><img src="../images/icon/2.png" alt="resume" /> Resume </a></li>
			<li id="project"><a href="project.php"><img src="../images/icon/3.png" alt="project" /> Projects </a></li>
			<li id="blog"><a href="blog.php"><img src="../images/icon/4.png" alt="blog" /> Blog </a></li>
			<li id="contact"><a href="contact.php"><img src="../images/icon/5.png" alt="contact" /> Contact Me </a></li>
		</ul>
	</div>
	<hr />
	
	
	
	<div class = "white" >
		<?php
		$count = 0;
		foreach(file($blog) as $line) {
			if (!startsWith($line, '***')) {
		
			 htmlspecialchars($line);
			 echo $line;
			} else {
		?>
			<hr />
		<?php
			}
		}
		?>
		<br />
		<hr />
		
		<form action='updateBlog.php' method='post'>

			<p><label>Title</label><br />
			<input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

			<p><label>Content</label><br />
			<textarea name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea></p>

			<p><input type='submit' name='submit' value='Submit'></p>

		</form>
	</div>

<div id=copyright>
		Copyright &copy; Shan Yang, 2015. All Rights Reserved.
</div>

</body>
</html>