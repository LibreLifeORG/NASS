<!DOCTYPE html>
<html lang="en">
<?php
	$content = file_get_contents('website.conf');
	preg_match('/Title="([^"]+)"/', $content, $title);
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title[1];?></title>
</head>
<div class="textBlock">
