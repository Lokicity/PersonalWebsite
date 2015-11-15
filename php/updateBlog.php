<?php
	$postTitle = $_POST["postTitle"];
	$content = $_POST["postCont"];
	$blog = "../blog/blog.txt";
	fopen($blog, "r+");
	$content .= "\n***\n";
	$postTitle .= $content; 
	$postTitle .= file_get_contents($blog);
	
	file_put_contents($blog, $postTitle);
	header("Location: blog.php");
?>