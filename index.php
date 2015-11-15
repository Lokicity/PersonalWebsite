<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
	<link href="css/main.css" rel="stylesheet">
	<title>Shan Yang - Who I AM</title>
</head>
	
<body>
	<h1>Shan Yang</h1>
	
	<hr />
	<div id = "horizontal">
		<ul>
			<li id="front"><a href="index.php"><img src="images/icon/1.png" alt="front" /> Front Page </a></li>
			<li id="resume"><a href="php/resume.php"><img src="images/icon/2.png" alt="resume" /> Resume </a></li>
			<li id="project"><a href="php/project.php"><img src="images/icon/3.png" alt="project" /> Projects </a></li>
			<li id="blog"><a href="php/blog.php"><img src="images/icon/4.png" alt="blog" /> Blog </a></li>
			<li id="contact"><a href="php/contact.php"><img src="images/icon/5.png" alt="contact" /> Contact Me </a></li>
		</ul>
	</div>
	<hr />
	
	<div class = "white" >
			<img src="images/me.jpg" style="width:244px;height:326px;"/> 
		<p>
			Welcome, Internet user from IP address
			<?php  
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			echo $ip;
			?>
		</p>
	</div>

<div id=copyright>
		Copyright &copy; Shan Yang, 2015. All Rights Reserved.
</div>

</body>
</html>