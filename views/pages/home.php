<?php 
foreach ($posts as $post) {
	echo '<h1>' . $post->title . '</h1>';
	echo $post->content;
	echo 'hx';
} 
?>